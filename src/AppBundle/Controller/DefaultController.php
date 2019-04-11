<?php

namespace AppBundle\Controller;

use AppBundle\Entity\OperationCaisse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       $form = $this->createFormBuilder()
            ->add('datacsv',FileType::class, array("required"=>true,'label' => ' '))
           ->add('typeOperation',EntityType::class,array(
               'class'=>'AppBundle\Entity\TypeOperation',
               'choice_label'=>'libelleTypeOperation',
               'choice_value'=>'id',
               'placeholder'=>'-Selectionner-',
               'expanded'=>false,
               'multiple'=>false,
               'mapped'=>false,
               'attr'=> ['class'=>'form-control','multiple'=>false],
           ))
            ->getForm();

        $form->handleRequest($request);
        $session = $request->getSession();
        $session->remove('csvname');
        $session->remove('csvArray');
        $session->remove('previewTab');
        $session->remove('customContent');

        $repertoire=realpath('../web');
        $row = 1;
        $tableau=[];
        $temp="";
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form["datacsv"]->getData();
            if( $file != NULL && $file != "" ){
                if (($handle = fopen($file, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle,1000, ",")) !== FALSE) 
                    {
                        $num = count($data);
                        $row++;
                        if($row>3)
                        {
                            for($c=0; $c < $num; $c++) 
                            {
                                $temp=$data[$c];
                            }  
                            if($temp[1]!=";")
                            {
                            array_push($tableau,$temp);
                            }         
                        }
                    }
                    fclose($handle);
                }

                $em = $this->getDoctrine()->getManager();
                for($i=0;$i<(sizeof($tableau)-1);$i++)
                {
                    $lignes=(explode(";",$tableau[$i]));
                    //service d'hydratation d'envoie des lignes d'operation dans la base de donnees
                    $creationOperationCaisse=$this->get('CreationOperationCaisse');
                    $creationOperationCaisse->hydratation($lignes,$form['typeOperation']->getdata());
                }
                $em->flush();

                $ext = $file->guessExtension();
                $fileName = "datacsv_".uniqid().".".$ext ;
                $file->move( $repertoire."/uploads", $fileName );
                $session->set('csvname', $fileName);

            }
            return $this->redirectToRoute('homepage');
        }

        $repository= $this->getDoctrine()->getRepository('AppBundle:OperationCaisse');
        $operations= $repository->getStat();
        $journalArray = [];
        $index = 1;
        $today = new \DateTime();
        foreach ($operations as $key => $opCumul) {
            # code...
            $dateCumul = $opCumul['dateReglement'];
            $detailsOp = $repository->findBy(['dateDeReglement' => $dateCumul]);
            
            $journalArray[] = array('opCumul' => $opCumul, 'detailsOp' => $detailsOp, 'jour' => $today->format('dmy') . '  ' . $index );
            $index++;
        }
        // dump( $journalArray );
// exit;
        $operationscaisses=$repository->findAll();
        


        //var_dump($operations);

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
            'journalArray' => $journalArray, 
            // 'operations' => $operations,
            // 'operationscaisses' => $operationscaisses,
            'today' => $today,
        ]);
    }




}
