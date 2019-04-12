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
        $session = $request->getSession();
        $session->remove('csvname');
        $session->remove('csvArray');
        $session->remove('previewTab');
        $session->remove('customContent');

        $repertoire=realpath('../web');
        $row = 1;
        $tableau=[];
        $temp="";
        if ($form->isSubmitted() && $form->isValid()) {
             $file = $form["datacsv"]->getData();
            if( $file != NULL && $file != "" ){

                $ext = $file->guessExtension();
                $fileName = "datacsv_".uniqid().".".$ext ;
                $file->move( $repertoire."/uploads", $fileName );
                $session->set('csvname', $fileName);

                $em = $this->getDoctrine()->getManager();
                $importation->setDateCreation(new \Datetime());
                $importation->setStatus(0);
                $importation->setSource($fileName);
                $em->persist($importation);
                $em->flush();
                $this->addFlash('notice','Importation effectué avec succes');

                }

                return $this->redirectToRoute('homepage');
            }

        
        //dump($journalArray);

        //exit();

        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $importations= $repository->findAll();
            

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
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



}
