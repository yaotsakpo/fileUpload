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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError as FormError;


class ProduitController extends Controller
{

    /**
     * @Route("/produit/", name="produit")
     */
    public function produitAction(Request $request)
    {
        $produit= new Produit();

        $produitForm= $this->createformBuilder()
        ->add('nomProduit',TextType::class,array('attr'=>['class'=>'form-control','required'=>true]))
        ->add('numeroDeCodeProduit',TextType::class,array('attr'=>['class'=>'form-control','required'=>true]))
        ->add('compteCompta',TextType::class,array('attr'=>['class'=>'form-control','mapped'=>false,'required'=>true]))
        ->getform();

        $produitForm->handleRequest($request);

        if ($produitForm->isSubmitted() && $produitForm->isValid()) {

            $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
            $compteCompta= $repository->findOneBy(['num'=>$produitForm['compteCompta']->getdata()]);



            if(!empty($compteCompta))
            {
                $repository= $this->getDoctrine()->getRepository('AppBundle:Produit');
                $pdt= $repository->findOneBy(['nomProduit'=>$produitForm['nomProduit']->getdata(),'numeroDeCodeProduit'=>$produitForm['numeroDeCodeProduit']->getdata(),'compteCompta'=>$compteCompta]);

                if(empty($pdt))
                {
                    $em = $this->getDoctrine()->getManager();
                    $produit->setNomProduit($produitForm['nomProduit']->getdata());
                    $produit->setNumeroDeCodeProduit($produitForm['numeroDeCodeProduit']->getdata());
                    $produit->setCompteCompta($compteCompta);
                    $em->persist($produit);
                    $em->flush();

                    $this->addFlash('notice','Produit enregistré avec success');

                    return $this->redirectToRoute('produit');

                }else
                {
                    $produitForm->addError(new FormError("Il existe deja un produit avec ces informations! veuillez ressaisir"));
                }
             }else
             {
                    $produitForm->addError(new FormError("Numero du compte du produit incorrect"));

             }
            
        }


        $repository= $this->getDoctrine()->getRepository('AppBundle:Produit');
        $produits= $repository->findAll();
        
       return $this->render('produit.html.twig', [
        'produitForm'=>$produitForm->createView(),
        'produits'=>$produits,
        ]); 
    }
    
    /**
     * @Route("/editProduit/{produit}", name="editProduit")
     */
    public function editProduitAction(Request $request, Produit $produit)
    {
        $editForm = $this->createformBuilder()
        ->add('nomProduit',TextType::class,array('attr'=>['class'=>'form-control','required'=>true],'data'=>$produit->getNomProduit()))
        ->add('numeroDeCodeProduit',TextType::class,array('attr'=>['class'=>'form-control','required'=>true],'data'=>$produit->getNumeroDeCodeProduit()))
        ->add('compteCompta',TextType::class,array('attr'=>['class'=>'form-control','required'=>true],'data'=>$produit->getCompteCompta()->getNum()))
        ->getform();

        $editForm->handleRequest($request);
        $pdt=[];
        if ($editForm->isSubmitted() && $editForm->isValid())
        {

            $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
            $compteCompta= $repository->findOneBy(['num'=>$editForm['compteCompta']->getdata()]);
            if(!empty($compteCompta))
            {
                $repository= $this->getDoctrine()->getRepository('AppBundle:Produit');
                $pdt= $repository->findOneBy([
                    'nomProduit'=>$editForm['nomProduit']->getdata(),
                    'numeroDeCodeProduit'=>$editForm['numeroDeCodeProduit']->getdata(),
                    'compteCompta'=>$compteCompta]);

                if( empty($pdt) ) 
                {
                    $em = $this ->getDoctrine()->getManager();
                    $produit->setNomProduit($editForm['nomProduit']->getdata());
                    $produit->setNumeroDeCodeProduit($editForm['numeroDeCodeProduit']->getdata());
                    $produit->setCompteCompta($compteCompta);
                    $em->flush();
                    $this->addFlash('notice','Modification reussie');
                    return $this ->redirectToRoute('produit');
                }else
                {
                    if($pdt!= $produit)
                    {
                        $editForm->addError(new FormError("Il existe deja un produit avec ces informations! veuillez ressaisir"));
                        
                    }else
                    {
                        $this->addFlash('notice','Modification reussie');
                        return $this ->redirectToRoute('produit');
                    }
                }
            }else
            {
                $editForm->addError(new FormError("Numero du compte du produit incorrect"));
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

        return $this->redirectToRoute('produit');

    }
    
}
