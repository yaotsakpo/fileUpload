<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Common\Persistence\ObjectRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Entity\Journal;
use AppBundle\Form\JournalType;
use Symfony\Component\Form\FormError as FormError;


class dispatchController extends Controller
{


    /**
     * @Route("/editDispatch/{journal}", name="editDispatch")
     */
    public function editDispatchAction(Request $request,Journal $journal)
    { 
        

        $repository= $this->getDoctrine()->getRepository('AppBundle:Banque');
        $banque= $repository->findOneBy(['compteCompta'=>$journal->getnumCompte()]);
        
        

        $cumul=$journal->getCumul();

        $montant= $journal->getMontant();

        $editForm= $this->createformBuilder()
        ->add('numCptDebiter',EntityType::class,array(
                    'class'=>'AppBundle\Entity\Banque',
                    'choice_label'=>'nomDeLaBanque',
                    'choice_value'=>'id',
                    'placeholder'=>'-Selectionner-',
                    'expanded'=>false,
                    'mapped'=>false,
                    'data'=>$banque,
                    'attr'=> ['class'=>'form-control'],
                ))
                ->add('montant',IntegerType::class,array('data'=>$montant,'attr'=>['class'=>'form-control']))
                ->add('libelle',TextType::class,array('data'=>$journal->getLibelleEcriture(),'attr'=>['class'=>'form-control']))
                ->getform();
                  
        $em = $this->getDoctrine()->getManager(); 
        $query = $em->createQuery(
        'SELECT SUM(j.montant) FROM AppBundle:Journal j WHERE j.dispatch = 1 and j.suppression  = 0 and j.isDebit  = 1 and j.cumul = :ligneCumul'
        )->setParameter('ligneCumul', $journal->getId());
         
        $dispatchsMontantTotal = $query->getResult();


        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
            $lignes= $repository->findBy(['codeOperation'=>$journal->getcodeOperation(),'suppression'=>0]);

           
            
           if( ((((int) ($dispatchsMontantTotal[0])[1]) + $editForm['montant']->getdata()) - (int) $journal->getmontant() ) <= (int)   $journal->getcumul()->getmontant() )
              {
              
                
          if( ($editForm['montant']->getdata()==$montant) && $editForm['libelle']->getdata() == $journal->getLibelleEcriture() && $editForm['numCptDebiter']->getdata() == $banque )
              {}
            else
            {
              $dispatchCredit= new Journal();
              $dispatchDebit= new Journal();
              $code = uniqid();

              $em = $this->getDoctrine()->getManager();
                  /******Insertion de la ligne de debit du dispatch*****/
                  $dispatchDebit->setJour(new \DateTime());
                  $dispatchDebit->setMontant($editForm['montant']->getdata());
                  $dispatchDebit->setLibelleEcriture($editForm['libelle']->getdata());
                  $dispatchDebit->setNumCompte($editForm['numCptDebiter']->getdata()->getcompteCompta());
                  $dispatchDebit->setCumul($journal->getCumul());
                  $dispatchDebit->setImportation($journal->getImportation());
                  $dispatchDebit->setDispatch(1);
                  $dispatchDebit->setCodeOperation($code);
                  $dispatchDebit->setsuppression(0);
                  $dispatchDebit->setIsDebit(1);
                  if($editForm['numCptDebiter']->getdata()->getcompteCompta()->getParent()!=null)
                  {
                    $compteParentLigne= new Journal();
                    $compteParentLigne->setJour(new \DateTime());
                    $compteParentLigne->setMontant($editForm['montant']->getdata());
                    $compteParentLigne->setLibelleEcriture($editForm['libelle']->getdata());
                    $compteParentLigne->setNumCompte($editForm['numCptDebiter']->getdata()->getcompteCompta()->getParent());
                    $compteParentLigne->setCumul($journal->getCumul());
                    $compteParentLigne->setImportation($journal->getImportation());
                    $compteParentLigne->setDispatch(1);
                    $compteParentLigne->setCodeOperation($code);
                    $compteParentLigne->setsuppression(0);
                    $compteParentLigne->setIsDebit(1);
                    $em->persist($compteParentLigne);

                }
                  /******Insertion de la ligne de credit du dispatch*****/
                  $dispatchCredit->setJour(new \DateTime());
                  $dispatchCredit->setMontant($editForm['montant']->getdata());
                  $dispatchCredit->setLibelleEcriture($editForm['libelle']->getdata());
                  $dispatchCredit->setNumCompte($journal->getImportation()->gettypeOperation()->getcompteCompta());
                  $dispatchCredit->setCumul($journal->getCumul());
                  $dispatchCredit->setImportation($journal->getImportation());
                  $dispatchCredit->setDispatch(1);
                  $dispatchCredit->setCodeOperation($code);
                  $dispatchCredit->setsuppression(0);
                  $dispatchCredit->setIsDebit(0);
                if($journal->getImportation()->gettypeOperation()->getcompteCompta()->getParent()!=null)
                {
                    $compteParentLigne= new Journal();
                    $compteParentLigne->setJour(new \DateTime());
                    $compteParentLigne->setMontant($editForm['montant']->getdata());
                    $compteParentLigne->setLibelleEcriture($editForm['libelle']->getdata());
                    $compteParentLigne->setNumCompte($journal->getImportation()->gettypeOperation()->getcompteCompta()->getParent());
                    $compteParentLigne->setCumul($journal->getCumul());
                    $compteParentLigne->setImportation($journal->getImportation());
                    $compteParentLigne->setDispatch(1);
                    $compteParentLigne->setCodeOperation($code);
                    $compteParentLigne->setsuppression(0);
                    $compteParentLigne->setIsDebit(0);
                    $em->persist($compteParentLigne);

                }
                $em->persist($dispatchDebit);
                $em->persist($dispatchCredit);
                $em->flush();

                if( ((((int) ($dispatchsMontantTotal[0])[1]) + $editForm['montant']->getdata()) - (int) $journal->getmontant() ) < (int) $journal->getcumul()->getmontant())
                {
                  $em = $this->getDoctrine()->getManager();
                  $journal->getcumul()->setdispatch(1);
                  $em->flush();
                }

                foreach ($lignes as $key => $ligne) {
                  $em = $this->getDoctrine()->getManager();
                  $ligne->setsuppression(1);
                  $em->flush();
                  }
              }

            $this->addFlash('notice','Dispatch effectue avec succes');


            return $this->redirectToRoute('dispatch',['ligneJournal'=>$journal->getcumul()->getId()]);

            }
            else
            {
            $editForm->addError(new FormError("Erreur de montant saisie "));
            }

        }
      
      
       return $this->render('editDispatch.html.twig', [
                'editForm'=>$editForm->createView(),
                'journal'=>$journal
        ]); 
  }



    /**
     * @Route("/deleteDispatch/{journal}", name="deleteDispatch")
     */
    public function deleteDispatchAction(Request $request,Journal $journal)
    {
        
      $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
      $lignes= $repository->findBy(['codeOperation'=>$journal->getcodeOperation(),'suppression'=>0]);


          foreach ($lignes as $key => $ligne) {
            $em = $this->getDoctrine()->getManager();
            $ligne->setsuppression(1);
            $em->flush();
            }
       

      $this->addFlash('notice','Supression de ligne dispatch effectue avec succes');


      return $this->redirectToRoute('visualisationDeJournal',['importation'=>$journal->getImportation()->getId()]);
 
  }
     

  
    
}
