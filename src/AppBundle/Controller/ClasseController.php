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
use AppBundle\Entity\ClassCompta;
use AppBundle\Form\ClassComptaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError as FormError;


class ClasseController extends Controller
{

    /**
     * @Route("/classe/", name="classe")
     */
    public function classeAction(Request $request)
    {
        $classe= new ClassCompta();

        $classeForm= $this->createform(ClassComptaType::class,$classe);

        $classeForm->handleRequest($request);

        if ($classeForm->isSubmitted() && $classeForm->isValid()) {

            
            $repository= $this->getDoctrine()->getRepository('AppBundle:ClassCompta');
            $clax= $repository->findOneBy(['libelle'=>$classeForm['libelle']->getdata(),'num'=>$classeForm['num']->getdata(),'description'=>$classeForm['description']->getdata()]);

            if(empty($clax))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($classe);
                $em->flush();

                $this->addFlash('notice','Classe enregistré avec success');

                return $this->redirectToRoute('classe');

            }else
            {
                $classeForm->addError(new FormError("Il existe deja une classe avec ces informations! veuillez ressaisir"));
            }
        
        
        }


        $repository= $this->getDoctrine()->getRepository('AppBundle:ClassCompta');
        $classes= $repository->findAll();
        
       return $this->render('classe.html.twig', [
        'classeForm'=>$classeForm->createView(),
        'classes'=>$classes,
        ]); 
    }
    
    /**
     * @Route("/editClasse/{classe}", name="editClasse")
     */
    public function editClasseAction(Request $request, ClassCompta $classe)
    {
        $editForm= $this->createform(ClassComptaType::class,$classe);

        $editForm->handleRequest($request);
        $pdt=[];
        if ($editForm->isSubmitted() && $editForm->isValid())
        {

            
                $repository= $this->getDoctrine()->getRepository('AppBundle:ClassCompta');
                $clax= $repository->findOneBy(['libelle'=>$editForm['libelle']->getdata(),'num'=>$editForm['num']->getdata(),'description'=>$editForm['description']->getdata()]);

                if( empty($clax) ) 
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
                    if($clax!= $classe)
                    {
                        $editForm->addError(new FormError("Il existe deja une classe avec ces informations! veuillez ressaisir"));
                        
                    }else
                    {
                        $this->addFlash('notice','Modification reussie');
                        return $this ->redirectToRoute('classe');
                    }
                }
            

            
        }
    	
       return $this->render('editClasse.html.twig', [
        'editForm'=>$editForm->createView()
        ]); 
 	}

     

     /**
     * @Route("/effacerClasse/{classe}",name="effacerClasse")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function sAction (ClassCompta $classe)
    {
        $repository= $this->getDoctrine()->getRepository('AppBundle:CompteCompta');
        $compte= $repository->findOneBy(['classCompta'=>$classe]);

        if(empty($compte))
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($classe);
            $em->flush();
            $this->addFlash('notice','Suppression reussie');

        }
        else
        {
            $this->addFlash('notice','Impossible de supprimer cette classe! il existe des Comptes en relation avec cette classe');
        }

        return $this->redirectToRoute('classe');

    }
    
}
