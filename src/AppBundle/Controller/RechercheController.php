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
use AppBundle\Entity\Importation;
use AppBundle\Form\ImportationType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormError as FormError;


class RechercheController extends Controller
{
   
    /**
     * @Route("/formatageRecherche/", name="formatageRecherche")
     */
    public function formatageRecherche(Request $request)
    {        
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $importations= $repository->findBy([],['id' => 'DESC']);

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
                        'invalid_message' => 'Le mois saisit ne correspond pas veuillez la corriger',
                        'html5'=>true,'format' => 'MM'))
            ->add('annee',DateType::class,array('widget' => 'single_text',
                        'html5'=>true,'format' => 'yyyy',
                        'invalid_message' => 'L\'année saisie ne correspond pas veuillez la corriger',
                        ))
            ->getform();

        $rechercheForm->handleRequest($request);

        $recherche=null;

        $bool=0;


        if ($rechercheForm->isSubmitted() && $rechercheForm->isValid()) {


                foreach ($importations as $key => $import) {
                    if($import->getmois()->format('MM') == $rechercheForm['mois']->getdata()->format('MM') && 
                        $import->getannee()->format('YYYY') == $rechercheForm['annee']->getdata()->format('YYYY') &&
                        $import->gettypeOperation() ==$rechercheForm['typeOperation']->getdata() && $import->getStatus() == 0)
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
                    $this->addFlash('notice','Importation trouvée avec success');


                    return $this->render('formatage.html.twig', [
                        'rechercheForm' => $rechercheForm->createView(),
                        'importation' => $recherche,
                    ]);

                }
            
        }

         return $this->render('formatage.html.twig', [
            'rechercheForm' => $rechercheForm->createView(),
            'importation' => $recherche,
        ]);
 	}



    /**
     * @Route("/journalRecherche/", name="journalRecherche")
     */
    public function journalRecherche(Request $request)
    {      
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $importations= $repository->findBy([],['id' => 'DESC']);  

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
                        'invalid_message' => 'Le mois saisit ne correspond pas veuillez la corriger',
                        'html5'=>true,'format' => 'MM'))
            ->add('annee',DateType::class,array('widget' => 'single_text',
                        'html5'=>true,'format' => 'yyyy',
                        'invalid_message' => 'L\'année saisie ne correspond pas veuillez la corriger',
                        ))
            ->getform();

        $recherche=null;

        $bool=0;

        $rechercheForm->handleRequest($request);

        if ($rechercheForm->isSubmitted() && $rechercheForm->isValid()) {


                foreach ($importations as $key => $import) {
                    if($import->getmois()->format('MM') == $rechercheForm['mois']->getdata()->format('MM') && 
                        $import->getannee()->format('YYYY') == $rechercheForm['annee']->getdata()->format('YYYY') &&
                        $import->gettypeOperation() ==$rechercheForm['typeOperation']->getdata() && $import->getStatus() == 1)
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
                    $this->addFlash('notice','Traitement trouvé avec success');


                    return $this->render('formatage.html.twig', [
                        'rechercheForm' => $rechercheForm->createView(),
                        'importation' => $recherche,
                    ]);

                }
            
        }

        return $this->render('formatage.html.twig', [
            'rechercheForm' => $rechercheForm->createView(),
            'importation' => $recherche,
        ]);
    }


    /**
     * @Route("/dispatchRecherche/", name="dispatchRecherche")
     */
    public function dispatchRecherche(Request $request)
    {      
        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $importations= $repository->findBy([],['id' => 'DESC']);  

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
                        'invalid_message' => 'Le mois saisit ne correspond pas veuillez la corriger',
                        'html5'=>true,'format' => 'MM'))
            ->add('annee',DateType::class,array('widget' => 'single_text',
                        'html5'=>true,'format' => 'yyyy',
                        'invalid_message' => 'L\'année saisie ne correspond pas veuillez la corriger',
                        ))
            ->getform();

        $rechercheForm->handleRequest($request);

        $recherche=null;
        
        $bool=0;

        if ($rechercheForm->isSubmitted() && $rechercheForm->isValid()) {


                foreach ($importations as $key => $import) {
                    if($import->getmois()->format('MM') == $rechercheForm['mois']->getdata()->format('MM') && 
                        $import->getannee()->format('YYYY') == $rechercheForm['annee']->getdata()->format('YYYY') &&
                        $import->gettypeOperation() ==$rechercheForm['typeOperation']->getdata() && $import->getStatus() == 2)
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

                    $this->addFlash('notice','Journal trouvé avec success');


                    return $this->render('formatage.html.twig', [
                        'rechercheForm' => $rechercheForm->createView(),
                        'importation' => $recherche,
                    ]);

                }
            
        }

        return $this->render('formatage.html.twig', [
            'rechercheForm' => $rechercheForm->createView(),
            'importation' => $recherche,
        ]);
    }


    
}
