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
use AppBundle\Entity\Produit;
use AppBundle\Form\ProduitType;
use AppBundle\Entity\Journal;
use AppBundle\Form\TypeOperationType;
use AppBundle\Entity\TypeOperation;
use Symfony\Component\Form\FormError as FormError;


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

        $repertoire=$this->getParameter('fichier_directory');
        $row = 1;
        $tableau=[];
        $temp="";

        

        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $importations= $repository->findBy([],['id' => 'DESC']);

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
                    $file->move( $repertoire, $fileName );

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
                   $form->addError(new FormError("Il existe deja une importation avec ce mois,cette annee et ce type d'operation.Veuillez changer la date ou le mois des operations"));

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

                    $rechercheForm->addError(new FormError("Il n'existe aucune importation correspondate à votre demande"));

                }else
                {

                    return $this->redirectToRoute('rechercheImportation',['importation'=>$recherche->getId()]);

                }
            
        }


        /********Formulaire de produit*******/

        $produit= new Produit();

        $produitForm= $this->createform(ProduitType::class,$produit);

        $produitForm->handleRequest($request);

        if ($produitForm->isSubmitted() && $produitForm->isValid()) {

            $repository= $this->getDoctrine()->getRepository('AppBundle:Produit');
            $pdt= $repository->findOneBy(['nomProduit'=>$produitForm['nomProduit']->getdata(),'numeroDeCodeProduit'=>$produitForm['numeroDeCodeProduit']->getdata(),'numCptCredit'=>$produitForm['numCptCredit']->getdata()]);

            if(empty($pdt))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($produit);
                $em->flush();

                $this->addFlash('notice','Produit enregistré avec success');

                return $this->redirectToRoute('homepage');

            }else
            {
                $produitForm->addError(new FormError("Il existe deja un produit avec ces informations! veuillez ressaisir"));
            }
            
        }


        $repository= $this->getDoctrine()->getRepository('AppBundle:Produit');
        $produits= $repository->findAll();


        /********Formulaire de type operation*******/

        $typeOperation= new TypeOperation();

        $typeOperationForm= $this->createform(TypeOperationType::class,$typeOperation);

        $typeOperationForm->handleRequest($request);

        if ($typeOperationForm->isSubmitted() && $typeOperationForm->isValid()) {

            $repository= $this->getDoctrine()->getRepository('AppBundle:TypeOperation');
            $typeOpe= $repository->findOneBy(['libelleTypeOperation'=>$typeOperationForm['libelleTypeOperation']->getdata(),'numCptDebit'=>$typeOperationForm['numCptDebit']->getdata()]);

            if(empty($typeOpe))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($typeOperation);
                $em->flush();

                $this->addFlash('notice','Type d\'operation enregistré avec success');

                return $this->redirectToRoute('homepage');

            }else
            {
                $typeOperationForm->addError(new FormError("Il existe deja un type d'operation existant avec ces informations! veuillez ressaisir"));
            }

        }

        $repository= $this->getDoctrine()->getRepository('AppBundle:TypeOperation');
        $typeOperations= $repository->findAll();
            

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
            'rechercheForm' => $rechercheForm->createView(),
            'produitForm' => $produitForm->createView(),
            'typeOperationForm' => $typeOperationForm->createView(),
            'importations' => $importations,
            'produits' => $produits,
            'typeOperations' => $typeOperations,
        ]);
    }


    /**
     * @Route("/operationCaisse/{importation}", name="operationCaisse")
     */
    public function operationCaisseAction(Request $request,$importation)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $import= $repository->findOneBy(['id'=>$importation]);
        $repertoire=$this->getParameter('fichier_directory');
        $file=$repertoire.$import->getSource();
       
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

        //dump($cumul);
        //exit();

        foreach ($cumul as $key => $positionCumul) {

        $repository= $this->getDoctrine()->getRepository('AppBundle:OperationCaisse');
        $operations= $repository->findBy(['importation'=>$import,'dateDeReglement'=>$positionCumul['dateReglement']]);

        $journal= new Journal();

        $em = $this->getDoctrine()->getManager();
        $journal->setJour(new \DateTime());
        $journal->setMontantDebit($positionCumul['prime']);
        $journal->setLibelleEcriture('Remboursement'.' - '.$positionCumul['type']);
        $journal->setNumCompteGeneral($positionCumul['numeroCompteDebit']);
        $journal->setImportation($import);
        $em->persist($journal);
        $em->flush();

            foreach ($operations as $key => $operation) {
                $detailsJournal= new Journal();
                $em = $this->getDoctrine()->getManager();
                    $detailsJournal->setJour(new \DateTime());
                    $detailsJournal->setMontantCredit($operation->getPrime());
                    $detailsJournal->setLibelleEcriture('Remboursement'.' - '.$positionCumul['type']);
                    $detailsJournal->setNumCompteGeneral($operation->getProduit()->getnumCptCredit());
                    $detailsJournal->setCumul($journal);
                    $detailsJournal->setImportation($operation->getImportation());
                $em->persist($detailsJournal);
                $em->flush();
            }

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
    $journalArray= $repository->findBy(['importation'=>$importation],['id' => 'ASC']);

      return $this->render('journal.html.twig', [
            'journalArray' => $journalArray,
            'importation' => $importation
        ]);
    }


    /**
     * @Route("/rechercheImportation/{importation}", name="rechercheImportation")
     */
    public function rechercheImportationAction(Request $request,Importation $importation)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $import= $repository->findBy(['id'=>$importation]);

      return $this->render('recherche.html.twig', [
            'importation' => $import
        ]);
    }


    /**
     * @Route("/exportationJournal/{importation}", name="exportationJournal")
     */
    public function exportationJournalAction(Request $request,Importation $importation)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
        $import= $repository->findBy(['importation'=>$importation],['id' => 'ASC']);

         $lignes = [];

         foreach ($import as $ligne) {

           $c['jour'] = $ligne->getjour()->format('d-m-Y');
           $c['Numero Piece'] = $ligne->getnumPiece();
           $c['Numero Facture'] = $ligne->getnumFacture();
           $c['Reference'] = $ligne->getreference();
           $c['Numero de Compte General'] = $ligne->getnumCompteGeneral();
           $c['Numero Compte Tiers'] = $ligne->getnumComptTiers();
           $c['Libelle Ecriture'] = $ligne->getlibelleEcriture();
           $c['Date Echeance'] = $ligne->getdateEcheance();
           $c['Position Journal'] = $ligne->getpositionJournal();
           $c['Debit'] = $ligne->getmontantDebit();
           $c['Credit'] = $ligne->getmontantCredit();
            $lignes[] = $c;
        }

        $filename = "datacsv_". date('d-m-Y') . "_" . date('H:i:s') . ".csv";        
        $this->outputCsv($filename, $lignes);
        exit();
        
    }


    function outputCsv($fileName, $assocDataArray) { 
        ob_clean();
        header('Pragma: public');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Cache-Control: private', false);    
        header('Content-Type: Application/csv');    
        header('Content-Disposition: attachment;filename=' . $fileName);    

        if (isset($assocDataArray['0'])) {        
            $fp = fopen('php://output', 'w');        
            fputcsv($fp, array_keys($assocDataArray['0']));        
            foreach ($assocDataArray AS $values) {            
                fputcsv($fp, $values, ";");        
            }        
            fclose($fp);    
        }    
        ob_flush();
    }


   /**
     * @Route("/dispatch/{ligneJournal}", name="dispatch")
     */
    public function dispatchAction(Request $request,Journal $ligneJournal)
    {

         $form= $this->createformBuilder()
        ->add('numCptDebiter',EntityType::class,array(
                    'class'=>'AppBundle\Entity\Banque',
                    'choice_label'=>'nomDeLaBanque',
                    'choice_value'=>'numCptDispatch',
                    'placeholder'=>'-Selectionner-',
                    'expanded'=>false,
                    'mapped'=>false,
                    'attr'=> ['class'=>'form-control'],
                ))
                ->add('montant',IntegerType::class,array('attr'=>['class'=>'form-control']))
                ->getform();

        $em = $this->getDoctrine()->getManager(); 
        $query = $em->createQuery(
        'SELECT SUM(j.montantDebit) FROM AppBundle:Journal j WHERE j.dispatch = 1 and j.cumul = :ligneCumul'
        )->setParameter('ligneCumul', $ligneJournal->getId());
         
        $dispatchsMontantTotal = $query->getResult(); 

        //var_dump( ((int) ($dispatchsMontantTotal[0])[1]) + 1 );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if( (((int) ($dispatchsMontantTotal[0])[1]) + $form['montant']->getdata()) <= $ligneJournal->getmontantDebit() )

            {

            $dispatch= new Journal();

              $em = $this->getDoctrine()->getManager();
                    $dispatch->setJour(new \DateTime());
                    $dispatch->setMontantDebit($form['montant']->getdata());
                    $dispatch->setLibelleEcriture($ligneJournal->getLibelleEcriture());
                    $dispatch->setNumCompteGeneral($form['numCptDebiter']->getdata()->getnumCptDispatch());
                    $dispatch->setCumul($ligneJournal);
                    $dispatch->setImportation($ligneJournal->getImportation());
                    $dispatch->setDispatch(1);
                $em->persist($dispatch);
                $ligneJournal->setDispatch(1);
                $em->flush();

            $this->addFlash('notice','Dispatch effectue avec succes');


            return $this->redirectToRoute('dispatch',['ligneJournal'=>$ligneJournal->getId()]);

            }
            else
            {
            $form->addError(new FormError("Le montant à saisir devrait etre inferieur "));
            }


        }

        return $this->render('dispatch.html.twig', [
            'ligneJournal' => $ligneJournal,
            'form' => $form->createView(),
        ]);   
        
    }


}
