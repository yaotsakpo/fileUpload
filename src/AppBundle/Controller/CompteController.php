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
use AppBundle\Entity\CompteCompta;
use AppBundle\Form\CompteComptaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError as FormError;


class CompteController extends Controller
{

    /**
     * @Route("/compte/", name="compte")
     */
    public function compteAction(Request $request)
    {
        $compte= new CompteCompta();

        $compteForm= $this->createform(CompteComptaType::class,$compte);

        $compteForm->handleRequest($request);

        if ($compteForm->isSubmitted() && $compteForm->isValid()) {

            
            $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
            $kompt= $repository->findOneBy(['libelle'=>$compteForm['libelle']->getdata(),'num'=>$compteForm['num']->getdata(),'description'=>$compteForm['description']->getdata(),'classCompta'=>$compteForm['classCompta']->getdata()]);

            if(empty($kompt))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($compte);
                $em->flush();

                $this->addFlash('notice','compte enregistré avec success');

                return $this->redirectToRoute('compte');

            }else
            {
                $compteForm->addError(new FormError("Il existe deja un compte avec ces informations! veuillez ressaisir"));
            }
        
        
        }


        $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
        $comptes= $repository->findAll();
        
       return $this->render('compte.html.twig', [
        'compteForm'=>$compteForm->createView(),
        'comptes'=>$comptes,
        ]); 
    }
    
    /**
     * @Route("/editCompte/{compte}", name="editCompte")
     */
    public function editCompteAction(Request $request, CompteCompta $compte)
    {
        $editForm= $this->createform(CompteComptaType::class,$compte);

        $editForm->handleRequest($request);
        $pdt=[];
        if ($editForm->isSubmitted() && $editForm->isValid())
        {

                $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
                $kompt= $repository->findOneBy(['libelle'=>$editForm['libelle']->getdata(),'num'=>$editForm['num']->getdata(),'description'=>$editForm['description']->getdata(),'classCompta'=>$editForm['classCompta']->getdata()]);

                if( empty($kompt) ) 
                {
                    $em = $this ->getDoctrine()->getManager();
                    $em->flush();
                    $this->addFlash('notice','Modification reussie');
                    return $this ->redirectToRoute('compte');
                }else
                {
                    if($kompt!= $compte)
                    {
                        $editForm->addError(new FormError("Il existe deja un compte avec ces informations! veuillez ressaisir"));
                        
                    }else
                    {
                        $this->addFlash('notice','Modification reussie');
                        return $this ->redirectToRoute('compte');
                    }
                }
            

            
        }
    	
       return $this->render('editCompte.html.twig', [
        'editForm'=>$editForm->createView()
        ]); 
 	}

     

     /**
     * @Route("/effacerCompte/{compte}",name="effacerCompte")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function sAction (CompteCompta $compte)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:Produit');
        $produit= $repository->findOneBy(['compteCompta'=>$compte]);

        $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
        $kompt= $repository->findOneBy(['parent'=>$compte]);

        if(empty($produit) && empty($kompt))
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compte);
            $em->flush();
            $this->addFlash('notice','Suppression reussie');

        }
        else
        {
            $this->addFlash('notice','Impossible de supprimer ce compte! il existe des produits ou d\'autres comptes en relation avec ce compte');
        }

        return $this->redirectToRoute('compte');

    }
    
}
