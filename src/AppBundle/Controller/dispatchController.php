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
        $banque= $repository->findOneBy(['numCptDispatch'=>$journal->getNumCompteGeneral()]);

        $cumul=$journal->getCumul();

        $montant=0;
        if( $journal->getMontantCredit()!=null ){
          $montant=$journal->getMontantCredit();
        }else
        {
          $montant=$journal->getMontantDebit();
        }

        $editForm= $this->createformBuilder()
        ->add('numCptDebiter',EntityType::class,array(
                    'class'=>'AppBundle\Entity\Banque',
                    'choice_label'=>'nomDeLaBanque',
                    'choice_value'=>'numCptDispatch',
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
        'SELECT SUM(j.montantCredit) FROM AppBundle:Journal j WHERE j.dispatch = 1 AND  j.suppression = 0 AND j.cumul = :ligneCumul'
        )->setParameter('ligneCumul', $journal->getId());
         
        $dispatchsMontantTotal = $query->getResult(); 


        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
            $lignes= $repository->findBy(['codeOperation'=>$journal->getcodeOperation(),'suppression'=>0]);

           
            
           if( ((((int) ($dispatchsMontantTotal[0])[1]) + $editForm['montant']->getdata()) - (int) $journal->getmontantDebit() ) <= (int)   $journal->getcumul()->getmontantDebit() )
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
                    $dispatchDebit->setMontantDebit($editForm['montant']->getdata());
                    $dispatchDebit->setLibelleEcriture($editForm['libelle']->getdata());
                    $dispatchDebit->setNumCompteGeneral($editForm['numCptDebiter']->getdata()->getnumCptDispatch());
                    $dispatchDebit->setCumul($journal->getcumul());
                    $dispatchDebit->setImportation($journal->getImportation());
                    $dispatchDebit->setDispatch(1);
                    $dispatchDebit->setCodeOperation($code);
                    $dispatchDebit->setsuppression(0);
                    /******Insertion de la ligne de credit du dispatch*****/
                    $dispatchCredit->setJour(new \DateTime());
                    $dispatchCredit->setMontantCredit($editForm['montant']->getdata());
                    $dispatchCredit->setLibelleEcriture($editForm['libelle']->getdata());
                    $dispatchCredit->setNumCompteGeneral($journal->getImportation()->gettypeOperation()->getnumCptDebit());
                    $dispatchCredit->setCumul($journal->getcumul());
                    $dispatchCredit->setImportation($journal->getImportation());
                    $dispatchCredit->setDispatch(1);
                    $dispatchCredit->setCodeOperation($code);
                    $dispatchCredit->setsuppression(0);
                $em->persist($dispatchDebit);
                $em->persist($dispatchCredit);
                $em->flush();

                if( ((((int) ($dispatchsMontantTotal[0])[1]) + $editForm['montant']->getdata()) - (int) $journal->getmontantDebit() ) < (int) $journal->getcumul()->getmontantDebit())
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

     

  
    
}
