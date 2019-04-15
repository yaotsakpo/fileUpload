<?php

namespace AppBundle\Controller;

use AppBundle\Entity\OperationCaisse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AppBundle\Entity\Importation;
use AppBundle\Form\ImportationType;
use AppBundle\Entity\Journal;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $importation= new Importation();

        $form= $this->createform(ImportationType::class,$importation)
                   ->add('datacsv',FileType::class, array("required"=>true,'label' => ' ',"mapped"=>false));

        $form->handleRequest($request);

        $repertoire=realpath('../web');
        $row = 1;
        $tableau=[];
        $temp="";

        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $importations= $repository->findAll();

        $bool=0;

        if ($form->isSubmitted() && $form->isValid()) {

                foreach ($importations as $key => $import) {
                    if($import->getmois()->format('MM') == $importation->getmois()->format('MM') && 
                        $import->getannee()->format('YYYY') == $importation->getannee()->format('YYYY') &&
                        $import->gettypeOperation() == $importation->gettypeOperation() )
                    {
                        $bool=1;
                    }
                }

                if($bool==0)
                {
                     $file = $form["datacsv"]->getData();
                if( $file != NULL && $file != "" ){

                    $ext = $file->guessExtension();
                    $fileName = "datacsv_".uniqid().".".$ext ;
                    $file->move( $repertoire."/uploads", $fileName );

                    $em = $this->getDoctrine()->getManager();
                    $importation->setDateCreation(new \Datetime());
                    $importation->setStatus(0);
                    $importation->setSource($fileName);
                    $em->persist($importation);
                    $em->flush();
                    $this->addFlash('notice','Importation effectué avec succes');

                    }

                    return $this->redirectToRoute('homepage');

                }else
                {
                    $this->addFlash('notice','Il existe deja une importation avec ce mois,cette annee et ce type d\'operation.Veuillez changer la date ou le mois des operations');

                }
            
            }


        /********Formulaire de recherche*******/

        $rechercheForm= $this->createformBuilder()
         ->add('typeOperation',EntityType::class,array(
                        'class'=>'AppBundle\Entity\TypeOperation',
                        'choice_label'=>'libelleTypeOperation',
                        'choice_value'=>'id',
                        'placeholder'=>'-Selectionner-',
                        'expanded'=>false,
                        'mapped'=>false,
                        'attr'=> ['class'=>'form-control','multiple'=>false],
                    ))
            ->add('mois',DateType::class,array('widget' => 'single_text',
                        'html5'=>true,'format' => 'MM'))
                ->add('annee',DateType::class,array('widget' => 'single_text',
                        'html5'=>true,'format' => 'yyyy'
                        ))
            ->getform();

        $rechercheForm->handleRequest($request);

        if ($rechercheForm->isSubmitted() && $rechercheForm->isValid()) {

            $recherche=null;

                foreach ($importations as $key => $import) {
                    if($import->getmois()->format('MM') == $rechercheForm['mois']->getdata()->format('MM') && 
                        $import->getannee()->format('YYYY') == $rechercheForm['annee']->getdata()->format('YYYY') &&
                        $import->gettypeOperation() ==$rechercheForm['typeOperation']->getdata() )
                    {
                        $bool=1;
                        $recherche=$import;
                    }
                }

                if($bool==0)
                {
                    $this->addFlash('notice','Il n\'existe aucune importation correspondate à votre demande');

                }else
                {

                    return $this->redirectToRoute('rechercheImportation',['importation'=>$recherche->getId()]);

                }
            
        }
            

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
            'rechercheForm' => $rechercheForm->createView(),
            'importations' => $importations,
        ]);
    }


    /**
     * @Route("/operationCaisse/{importation}", name="operationCaisse")
     */
    public function operationCaisseAction(Request $request,$importation)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $import= $repository->findOneBy(['id'=>$importation]);
        $repertoire=realpath('../web/uploads');
        $file=$repertoire.'\\'.$import->getSource();
       
        $contenu_du_fichier=file($file);
        $em = $this->getDoctrine()->getManager();
        for($i=3;$i<(sizeof($contenu_du_fichier)-1);$i++)
        {
            if($contenu_du_fichier[$i][1]!=";")
            {      
             $lignes=(explode(";",$contenu_du_fichier[$i]));
             $creationOperationCaisse=$this->get('CreationOperationCaisse');
             $creationOperationCaisse->hydratation($lignes,$importation);
            }
        }
        $import->setStatus(1);
        $em->flush();
        $this->addFlash('notice','Traitement effectué effectué avec succes');

        return $this->redirectToRoute('homepage');

    }


    /**
     * @Route("/generationDeJournal/{importation}", name="generationDeJournal")
     */
    public function generationDeJournalAction(Request $request,$importation)
    {

        

        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $import= $repository->findOneBy(['id'=>$importation]);

        $repository= $this->getDoctrine()->getRepository('AppBundle:OperationCaisse');
        $operations= $repository->findBy(['importation'=>$import]);

        $cumul= $repository->cumul($importation);


        $journal= new Journal();

        $em = $this->getDoctrine()->getManager();
        $journal->setJour(new \DateTime());
        $journal->setMontantDebit($cumul[0]['prime']);
        $journal->setLibelleEcriture('Remboursement'.' - '.$cumul[0]['type']);
        $journal->setNumCompteGeneral($cumul[0]['numeroCompteDebit']);
        $journal->setImportation($import);
        $em->persist($journal);
        $em->flush();


        foreach ($operations as $key => $operation) {
            $detailsJournal= new Journal();
            $em = $this->getDoctrine()->getManager();
                $detailsJournal->setJour(new \DateTime());
                $detailsJournal->setMontantCredit($operation->getPrime());
                $detailsJournal->setLibelleEcriture('Remboursement'.' - '.$cumul[0]['type']);
                $detailsJournal->setNumCompteGeneral($operation->getProduit()->getnumCptCredit());
                $detailsJournal->setCumul($journal);
                $detailsJournal->setImportation($operation->getImportation());
            $em->persist($detailsJournal);
            $em->flush();
        }

    
        $em = $this->getDoctrine()->getManager();
        $import->setStatus(2);
        $em->flush();
        $this->addFlash('notice','Journal généré avec succes');

        return $this->redirectToRoute('homepage');

    }


      /**
     * @Route("/visualisationDeJournal/{importation}", name="visualisationDeJournal")
     */
    public function visualisationDeJournalAction(Request $request,$importation)
    {

    $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
    $journalArray= $repository->findBy(['importation'=>$importation]);;
        
      return $this->render('journal.html.twig', [
            'journalArray' => $journalArray
        ]);
    }


    /**
     * @Route("/rechercheImportation/{importation}", name="rechercheImportation")
     */
    public function rechercheImportationAction(Request $request,Importation $importation)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $import= $repository->findBy(['id'=>$importation]);;

      return $this->render('recherche.html.twig', [
            'importation' => $import
        ]);
    }


}
