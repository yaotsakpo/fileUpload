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
use AppBundle\Entity\Produit;
use AppBundle\Form\ProduitType;
use Symfony\Component\Form\FormError as FormError;


class ProduitController extends Controller
{
    /**
     * @Route("/editProduit/{produit}", name="editProduit")
     */
    public function editProduitAction(Request $request, Produit $produit)
    {
        $editForm = $this ->createForm( 'AppBundle\Form\ProduitType' , $produit);
        $editForm->handleRequest($request);
        $pdt=[];
        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $repository= $this->getDoctrine()->getRepository('AppBundle:Produit');
            $pdt= $repository->findOneBy([
                'nomProduit'=>$editForm['nomProduit']->getdata(),
                'numeroDeCodeProduit'=>$editForm['numeroDeCodeProduit']->getdata(),
                'numCptCredit'=>$editForm['numCptCredit']->getdata()]);

            if( empty($pdt) ) 
            {
                $em = $this ->getDoctrine()->getManager();
                $em->flush();
                $this->addFlash('notice','Modification reussie');
                return $this ->redirectToRoute('homepage');
            }else
            {
                if($pdt!= $produit)
                {
                    $editForm->addError(new FormError("Il existe deja un produit avec ces informations! veuillez ressaisir"));
                    
                }else
                {
                    $this->addFlash('notice','Modification reussie');
                    return $this ->redirectToRoute('homepage');
                }
            }

            
        }
    	
       return $this->render('editProduit.html.twig', [
        'editForm'=>$editForm->createView()
        ]); 
 	}

     

     /**
     * @Route("/effacerProduit/{produit}",name="effacerProduit")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function sAction (Produit $produit)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:OperationCaisse');
        $operation= $repository->findOneBy(['produit'=>$produit]);

        if(empty($operation))
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();
            $this->addFlash('notice','Suppression reussie');

        }
        else
        {
            $this->addFlash('notice','Impossible de supprimer ce produit! il existe des importations en relation avec ce produit');
        }

        return $this->redirectToRoute('homepage');

    }
    
}
