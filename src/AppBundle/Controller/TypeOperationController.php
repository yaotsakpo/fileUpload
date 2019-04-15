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


class TypeOperationController extends Controller
{
    /**
     * @Route("/editTypeOperation/{typeOperation}", name="editTypeOperation")
     */
    public function editTypeOperationAction(Request $request,TypeOperation $typeOperation)
    {
        $editForm = $this ->createForm( 'AppBundle\Form\TypeOperationType' , $typeOperation);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $repository= $this->getDoctrine()->getRepository('AppBundle:TypeOperation');
            $typeOpe= $repository->findOneBy([
                'libelleTypeOperation'=>$editForm['libelleTypeOperation']->getdata(),
                'numCptDebit'=>$editForm['numCptDebit']->getdata()]);

            if( empty($typeOpe) ) 
            {

            $em = $this ->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('notice','Modification reussie');
            return $this ->redirectToRoute('homepage');
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
                    return $this ->redirectToRoute('homepage');
                }
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

        return $this->redirectToRoute('homepage');

    }
    
}
