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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormError as FormError;


class nouvelleImportationController extends Controller
{
    /**
     * @Route("/nouvelleImportation/", name="nouvelleImportation")
     */
    public function nouvelleImportationAction(Request $request)
    {
        
    	$importation= new Importation();

        $form= $this->createform(ImportationType::class,$importation)
                   ->add('datacsv',FileType::class, array("required"=>true,'label' => ' ',"mapped"=>false));

        $form->handleRequest($request);

        $repertoire=$this->getParameter('fichier_directory');
        $row = 1;
        $tableau=[];
        $temp="";

        

        $repository= $this->getDoctrine()->getRepository('AppBundle:Importation');
        $importations= $repository->findBy([],['id' => 'DESC']);

        $bool=0;

        if ($form->isSubmitted() && $form->isValid()) {

                foreach ($importations as $key => $import) {
                    if($import->getmois()->format('MM') == $importation->getmois()->format('MM') && 
                        $import->getannee()->format('YYYY') == $importation->getannee()->format('YYYY') &&
                        $import->gettypeOperation() == $importation->gettypeOperation() )
                    {
                        $bool=1;
                    }
                }

                if($bool==0)
                {
                     $file = $form["datacsv"]->getData();
                if( $file != NULL && $file != "" ){

                    $ext = $file->guessExtension();
                    $fileName = "datacsv_".uniqid().".".$ext ;
                    $file->move( $repertoire, $fileName );

                    $em = $this->getDoctrine()->getManager();
                    $importation->setDateCreation(new \Datetime());
                    $importation->setStatus(0);
                    $importation->setSource($fileName);
                    $em->persist($importation);
                    $em->flush();
                    $this->addFlash('notice','Importation effectué avec succes');

                    }

                return $this->redirectToRoute('formatageRecherche',['importation'=>$importation->getId()]);

                }else
                {
   $form->addError(new FormError("Il existe deja une importation avec ce mois,cette annee et ce type d'operation.Veuillez changer la date ou le mois des operations"));

                }
            }
    	
       return $this->render('nouvelleImportation.html.twig', [
               'form' => $form->createView(),
               'importations' => $importations,
        ]); 
 	}


    
}
