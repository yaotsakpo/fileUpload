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
use AppBundle\Entity\Exportation;
use Symfony\Component\Form\FormError as FormError;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
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
        for($i=2;$i<(sizeof($contenu_du_fichier)-1);$i++)
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

       return $this->redirectToRoute('journalRecherche',['importation'=>$importation]);

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

       
        foreach ($cumul as $key => $positionCumul) {

        $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
        $compte= $repository->findOneBy(['num'=>$positionCumul['numeroCompteDebit']]);

        $repository= $this->getDoctrine()->getRepository('AppBundle:OperationCaisse');
        $operations= $repository->findBy(['importation'=>$import,'dateDeReglement'=>$positionCumul['dateReglement']]);

        $journal= new Journal();

        $em = $this->getDoctrine()->getManager();
        $journal->setJour(new \DateTime());
        $journal->setMontant($positionCumul['prime']);
        $journal->setLibelleEcriture('Remboursement'.' - '.$positionCumul['type']);
        $journal->setNumCompte($compte);
        $journal->setImportation($import);
        $journal->setsuppression(0);
        $journal->setIsDebit(1);
        $em->persist($journal);
        $em->flush();
            foreach ($operations as $key => $operation) {
                $detailsJournal= new Journal();

                $em = $this->getDoctrine()->getManager();
                    $detailsJournal->setJour(new \DateTime());
                    $detailsJournal->setMontant($operation->getPrime());
                    $detailsJournal->setLibelleEcriture('Remboursement'.' - '.$positionCumul['type']);
                    $detailsJournal->setNumCompte($operation->getProduit()->getcompteCompta());
                    $detailsJournal->setCumul($journal);
                    $detailsJournal->setImportation($operation->getImportation());
                    $detailsJournal->setsuppression(0);
                    $detailsJournal->setIsDebit(0);
                $em->persist($detailsJournal);
                $em->flush();
            }

        }
    
        $em = $this->getDoctrine()->getManager();
        $import->setStatus(2);
        $em->flush();
        $this->addFlash('notice','Journal généré avec succes');

       return $this->redirectToRoute('dispatchRecherche',['importation'=>$importation]);

    }


      /**
     * @Route("/visualisationDeJournal/{importation}", name="visualisationDeJournal")
     */
    public function visualisationDeJournalAction(Request $request,$importation)
    {

    $em = $this->getDoctrine()->getManager(); 
        $query = $em->createQuery(
        'SELECT j 
         FROM AppBundle:Journal j 
         WHERE j.cumul IS null AND j.dispatch=1 AND j.suppression=0 AND j.importation= :importation '
        )->setParameter('importation', $importation);
   
    $cumuls = $query->getResult();
    

    $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
    $journalArray= $repository->findBy(['importation'=>$importation,'suppression'=>0],['id' => 'ASC']);

     $em = $this->getDoctrine()->getManager(); 
        $query = $em->createQuery(
        'SELECT j 
         FROM AppBundle:Journal j 
         WHERE j.cumul IS NOT NULL AND j.dispatch=1 AND j.suppression=0 AND j.importation= :importation '
        )->setParameter('importation', $importation);
   
    $dispatchs = $query->getResult(); 



      return $this->render('journal.html.twig', [
            'journalArray' => $journalArray,
            'dispatchs' => $dispatchs,
            'importation' => $importation,
            'cumuls' => $cumuls
        ]);
    }



    /**
     * @Route("/exportationJournal/{importation}", name="exportationJournal")
     */
    public function exportationJournalAction(Request $request,Importation $importation)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
        $import= $repository->findBy(['importation'=>$importation,'suppression'=>0],['id' => 'ASC']);

         $lignes = [];

         foreach ($import as $ligne) {

           $exportation = new Exportation();
           $em = $this->getDoctrine()->getManager();
           $exportation->setJournal($ligne);
           $exportation->setJourExportation(new \DateTime());
           $c['jour'] = $ligne->getjour()->format('d-m-Y');
           $exportation->setJourJournal($ligne->getjour());
           $c['Numero Piece'] = $ligne->getnumPiece();
           $exportation->setnumPiece($ligne->getnumPiece());
           $c['Numero Facture'] = $ligne->getnumFacture();
           $exportation->setnumFacture($ligne->getnumFacture());
           $c['Reference'] = $ligne->getreference();
           $exportation->setreference($ligne->getreference());
           $c['Numero de Compte General'] = $ligne->getnumCompte()->getNum();
           $exportation->setnumCompteGeneral($ligne->getnumCompte()->getNum());
           $c['Numero Compte Tiers'] = "";
           $exportation->setnumCompteTiers("");
           $c['Libelle Ecriture'] = $ligne->getlibelleEcriture();
           $exportation->setlibelleEcriture($ligne->getlibelleEcriture());
           $c['Date Echeance'] = $ligne->getdateEcheance();
           $exportation->setdateEcheance($ligne->getdateEcheance());
           $c['Position Journal'] = $ligne->getpositionJournal();
           $exportation->setpositionJournal($ligne->getpositionJournal());
           if($ligne->getisDebit()==1)
           {
               $c['Debit'] = $ligne->getmontant();
               $exportation->setmontantDebit($ligne->getmontant());
               $c['Credit'] = "";
               $exportation->setmontantCredit(null);
           }
           else
           {
               $c['Debit'] = "";
               $exportation->setmontantDebit(null);
               $c['Credit'] = $ligne->getmontant();
               $exportation->setmontantCredit($ligne->getmontant());
           }
          
           $em->persist($exportation);
           $em->flush();
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
                    'choice_value'=>'id',
                    'placeholder'=>'-Selectionner-',
                    'expanded'=>false,
                    'mapped'=>false,
                    'attr'=> ['class'=>'form-control'],
                ))
                ->add('montant',IntegerType::class,array('attr'=>['class'=>'form-control']))
                ->add('libelle',TextType::class,array('attr'=>['class'=>'form-control']))
                ->getform();

        $em = $this->getDoctrine()->getManager(); 
        $query = $em->createQuery(
        'SELECT SUM(j.montant) FROM AppBundle:Journal j,AppBundle:CompteCompta c WHERE c=j.numCompte and c.parent is null and  j.dispatch = 1 and j.suppression  = 0  and j.isDebit=1 and j.cumul = :ligneCumul'
        )->setParameter('ligneCumul', $ligneJournal->getId());
         
        $dispatchsMontantTotal = $query->getResult(); 


        $em = $this->getDoctrine()->getManager(); 
        $query = $em->createQuery(
        'SELECT j FROM AppBundle:Journal j,AppBundle:CompteCompta c WHERE c=j.numCompte and c.parent is not null and  j.dispatch = 1 and j.suppression = 0 and j.cumul = :ligneCumul'
        )->setParameter('ligneCumul', $ligneJournal->getId());

         
        $dispatchs = $query->getResult(); 

        

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if( (((int) ($dispatchsMontantTotal[0])[1]) + $form['montant']->getdata()) <= $ligneJournal->getmontant() )

            {

              $dispatchCredit= new Journal();
              $dispatchDebit= new Journal();
              $code = uniqid();

                $em = $this->getDoctrine()->getManager();
                /******Insertion de la ligne de debit du dispatch*****/
                $dispatchDebit->setJour(new \DateTime());
                $dispatchDebit->setMontant($form['montant']->getdata());
                $dispatchDebit->setLibelleEcriture($form['libelle']->getdata());
                $dispatchDebit->setNumCompte($form['numCptDebiter']->getdata()->getcompteCompta());
                $dispatchDebit->setCumul($ligneJournal);
                $dispatchDebit->setImportation($ligneJournal->getImportation());
                $dispatchDebit->setDispatch(1);
                $dispatchDebit->setCodeOperation($code);
                $dispatchDebit->setsuppression(0);
                $dispatchDebit->setIsDebit(1);
                if($form['numCptDebiter']->getdata()->getcompteCompta()->getParent()!=null)
                {
                    $compteParentLigne= new Journal();
                    $compteParentLigne->setJour(new \DateTime());
                    $compteParentLigne->setMontant($form['montant']->getdata());
                    $compteParentLigne->setLibelleEcriture($form['libelle']->getdata());
                    $compteParentLigne->setNumCompte($form['numCptDebiter']->getdata()->getcompteCompta()->getparent());
                    $compteParentLigne->setCumul($ligneJournal);
                    $compteParentLigne->setImportation($ligneJournal->getImportation());
                    $compteParentLigne->setDispatch(1);
                    $compteParentLigne->setCodeOperation($code);
                    $compteParentLigne->setsuppression(0);
                    $compteParentLigne->setIsDebit(1);
                    $em->persist($compteParentLigne);

                }
                /******Insertion de la ligne de credit du dispatch*****/
                $dispatchCredit->setJour(new \DateTime());
                $dispatchCredit->setMontant($form['montant']->getdata());
                $dispatchCredit->setLibelleEcriture($form['libelle']->getdata());
                $dispatchCredit->setNumCompte($ligneJournal->getImportation()->gettypeOperation()->getcompteCompta());
                $dispatchCredit->setCumul($ligneJournal);
                $dispatchCredit->setImportation($ligneJournal->getImportation());
                $dispatchCredit->setDispatch(1);
                $dispatchCredit->setCodeOperation($code);
                $dispatchCredit->setsuppression(0);
                $dispatchCredit->setIsDebit(0);
                if($ligneJournal->getImportation()->gettypeOperation()->getcompteCompta()->getParent()!=null)
                {
                    $compteParentLigneCredit= new Journal();
                    $compteParentLigneCredit->setJour(new \DateTime());
                    $compteParentLigneCredit->setMontant($form['montant']->getdata());
                    $compteParentLigneCredit->setLibelleEcriture($form['libelle']->getdata());
                    $compteParentLigneCredit->setNumCompte($ligneJournal->getImportation()->gettypeOperation()->getcompteCompta()->getParent());
                    $compteParentLigneCredit->setCumul($ligneJournal);
                    $compteParentLigneCredit->setImportation($ligneJournal->getImportation());
                    $compteParentLigneCredit->setDispatch(1);
                    $compteParentLigneCredit->setCodeOperation($code);
                    $compteParentLigneCredit->setsuppression(0);
                    $compteParentLigneCredit->setIsDebit(0);
                    $em->persist($compteParentLigneCredit);
                }
                $em->persist($dispatchDebit);
                $em->persist($dispatchCredit);
                $ligneJournal->setDispatch(1);
                $em->flush();

            $this->addFlash('notice','Dispatch effectue avec succes');


            return $this->redirectToRoute('dispatch',['ligneJournal'=>$ligneJournal->getId()]);

            }
            else
            {
            $form->addError(new FormError("Erreur de montant saisie "));
            }


        }

        return $this->render('dispatch.html.twig', [
            'ligneJournal' => $ligneJournal,
            'dispatch' => ((int) ($dispatchsMontantTotal[0])[1]),
            'dispatchs' => $dispatchs,
            'form' => $form->createView(),
        ]);   
        
    }


     /**
     * @Route("/finDispatch/{ligneJournal}", name="finDispatch")
     */
    public function finDispatchAction(Request $request,Journal $ligneJournal)
    {
        $em = $this->getDoctrine()->getManager();

        $ligneJournal->setDispatch(0);

        $em->flush();

        $this->addFlash('notice','Dispatch cloturé avec succes');


        return $this->redirectToRoute('visualisationDeJournal',['importation'=>$ligneJournal->getImportation()->getId()]);

            
        
    }


}
