<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Common\Persistence\ObjectRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Entity\TypeOperation;
use AppBundle\Form\TypeOperationType;
use Symfony\Component\Form\FormError as FormError;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class TypeOperationController extends Controller
{

    /**
     * @Route("/typeOperation/", name="typeOperation")
     */
    public function typeOperationAction(Request $request)
    {
       $typeOperation= new TypeOperation();

        $typeOperationForm= $this->createformBuilder()
        ->add('libelleTypeOperation',TextType::class,array('attr'=>['class'=>'form-control','required'=>true]))
        ->add('compteCompta',TextType::class,array('attr'=>['class'=>'form-control','mapped'=>false,'required'=>true]))
        ->getform();

        $typeOperationForm->handleRequest($request);

        if ($typeOperationForm->isSubmitted() && $typeOperationForm->isValid()) {

            $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
            $compteCompta= $repository->findOneBy(['num'=>$typeOperationForm['compteCompta']->getdata()]);

             if(!empty($compteCompta))
            {
            $repository= $this->getDoctrine()->getRepository('AppBundle:TypeOperation');
            $typeOpe= $repository->findOneBy(['libelleTypeOperation'=>$typeOperationForm['libelleTypeOperation']->getdata(),'compteCompta'=>$compteCompta]);

                if(empty($typeOpe))
                {
                    $em = $this->getDoctrine()->getManager();
                    $typeOperation->setlibelleTypeOperation($typeOperationForm['libelleTypeOperation']->getdata());
                    $typeOperation->setCompteCompta($compteCompta);
                    $em->persist($typeOperation);
                    $em->flush();

                    $this->addFlash('notice','Type d\'operation enregistré avec success');

                    return $this->redirectToRoute('typeOperation');

                }else
                {
                    $typeOperationForm->addError(new FormError("Il existe deja un type d'operation existant avec ces informations! veuillez ressaisir"));
                }
            }
            else
            {
                    $typeOperationForm->addError(new FormError("Numero du compte incorrect"));

            }

        }

        $repository= $this->getDoctrine()->getRepository('AppBundle:TypeOperation');
        $typeOperations= $repository->findAll();

        return $this->render('typeOperation.html.twig', [
        'typeOperationForm'=>$typeOperationForm->createView(),
        'typeOperations'=>$typeOperations,
        ]); 
    }

    /**
     * @Route("/editTypeOperation/{typeOperation}", name="editTypeOperation")
     */
    public function editTypeOperationAction(Request $request,TypeOperation $typeOperation)
    {
        $editForm =  $this->createformBuilder()
        ->add('libelleTypeOperation',TextType::class,array('attr'=>['class'=>'form-control','required'=>true],'data'=>$typeOperation->getlibelleTypeOperation()))
        ->add('compteCompta',TextType::class,array('attr'=>['class'=>'form-control','required'=>true],'data'=>$typeOperation->getCompteCompta()->getNum()))
        ->getform();

        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
            $compteCompta= $repository->findOneBy(['num'=>$editForm['compteCompta']->getdata()]);
            if(!empty($compteCompta))
            {
                $repository= $this->getDoctrine()->getRepository('AppBundle:TypeOperation');
                $typeOpe= $repository->findOneBy([
                    'libelleTypeOperation'=>$editForm['libelleTypeOperation']->getdata(),
                    'compteCompta'=>$compteCompta]);

                if( empty($typeOpe) ) 
                {

                $em = $this ->getDoctrine()->getManager();
                $typeOperation->setlibelleTypeOperation($editForm['libelleTypeOperation']->getdata());
                $typeOperation->setCompteCompta($compteCompta);
                $em->flush();
                $this->addFlash('notice','Modification reussie');
                return $this ->redirectToRoute('typeOperation');
                }
                else
                {
                    if($typeOpe!= $typeOperation)
                    {
                        $editForm->addError(new FormError("Il existe deja un type d'operation existant avec ces informations! veuillez ressaisir"));
                    }
                    else
                    {
                        $this->addFlash('notice','Modification reussie');
                        return $this ->redirectToRoute('typeOperation');
                    }
                }
            }else
            {
                $editForm->addError(new FormError("Numero du compte incorrect"));
            }
        }
    	
    	
       return $this->render('editTypeOperation.html.twig', [
                'editForm'=>$editForm->createView()
        ]); 
 	}

     

     /**
     * @Route("/effacerTypeOperation/{typeOperation}",name="effacerTypeOperation")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function supressionAction (TypeOperation $typeOperation)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $imporation= $repository->findOneBy(['typeOperation'=>$typeOperation]);

        if(empty($imporation))
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeOperation);
            $em->flush();
            $this->addFlash('notice','Suppression reussie');

        }
        else
        {
            $this->addFlash('notice','Impossible de supprimer ce type d\'operation! il existe des importations en relation avec ce type d\'operation');
        }

        return $this->redirectToRoute('typeOperation');

    }
    
}
