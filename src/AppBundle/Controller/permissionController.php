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
use AppBundle\Entity\Journal;
use AppBundle\Form\JournalType;
use AppBundle\Entity\AccordPermission;
use AppBundle\Entity\DemandePermission;
use Symfony\Component\Form\FormError as FormError;


class permissionController extends Controller
{

     /**
     * @Route("/envoieDemandePermission/{journal}", name="envoieDemandePermission")
     */
    public function envoieDemandePermissionAction(Request $request,Journal $journal)
    {

       $repository= $this->getDoctrine()->getRepository('AppBundle:DemandePermission');
       $demande= $repository->findOneBy(['journal'=>$journal,'demandeur'=>$this->getUser()]);
        
        if(empty($demande))
        {
           $demandePermission = new DemandePermission();
           $em = $this->getDoctrine()->getManager();
           $demandePermission->setDate(new \DateTime());
           $demandePermission->setEtat(0);
           $demandePermission->setstatus(0);
           $demandePermission->setDemandeur($this->getUser());
           $demandePermission->setJournal($journal);

           $em->persist($demandePermission);
           $em->flush();

           $this->addFlash('notice','Demande de permission pour modification de la ligne dispatch envoyé avec success ');
         }

         if(!empty($demande))
        {
           if($demande->getEtat()==0)
           {

            $repository= $this->getDoctrine()->getRepository('AppBundle:AccordPermission');
            $accord= $repository->findOneBy(['demande'=>$demande,'valeur'=>0]);

            if(empty($accord))
            {
          $this->addFlash('notice','Demande de permission pour modification de la ligne dispatch deja envoyé et en cous de traitement '); 
            }

            if(!empty($accord) && $demande->getstatus()==1)
            {
          $this->addFlash('notice','Votre demande de modification de la ligne dispatch a été refusée par l\'administrateur '); 
            }
            
           }else
           {
            ///code pour renvoyer vers la modification

            return $this->redirectToRoute('editDispatch',['journal'=>$journal->getId()]);

           }
         }
        
       return $this->redirectToRoute('visualisationDeJournal',['importation'=>$journal->getImportation()->getId()]);
    }


     /**
     * @Route("/demandePermissionListe", name="demandePermissionListe")
     */
    public function demandePermissionListeAction(Request $request)
    {

        $repository= $this->getDoctrine()->getRepository('AppBundle:DemandePermission');
        $demandes= $repository->findAll();

       return $this->render('demandePermission.html.twig', [
            'demandes' => $demandes,
           
        ]);
    }



     /**
     * @Route("/visualiastionLigneJournal/{id}", name="visualiastionLigneJournal")
     */
    public function visualiastionLigneJournalAction(Request $request,Journal $id)
    {

        $repository= $this->getDoctrine()->getRepository('AppBundle:Journal');
        $choix= $repository->findBy(['id'=>$id]);
        $journalArray= $repository->findBy(['codeOperation'=>$choix[0]->getcodeOperation()]);

        $repository= $this->getDoctrine()->getRepository('AppBundle:DemandePermission');
        $demande = $repository->findOneBy(['journal'=>$id]);

        
       return $this->render('visualisationLigneDispatch.html.twig', [
            'journalArray' => $journalArray,
            'demande' => $demande,
        ]);
    }


     /**
     * @Route("/accordDemande/{id}", name="accordDemande")
     */
    public function accordDemande(Request $request,DemandePermission $id)
    {

       $accordPermission = new AccordPermission();
       $em = $this->getDoctrine()->getManager();
       $accordPermission->setdateAccordPermission(new \DateTime());
       $accordPermission->setvaleur(1);
       $id->setEtat(1);
       $id->setstatus(1);
       $accordPermission->setaccordeur($this->getUser());
       $accordPermission->setdemande($id);

       $em->persist($accordPermission);
       $em->flush();

       $this->addFlash('notice','Demande accordée avec success');
        
        return $this->redirectToRoute('demandePermissionListe');

    }


    /**
     * @Route("/rejetDemande/{id}", name="rejetDemande")
     */
    public function rejetDemande(Request $request,DemandePermission $id)
    {

       $accordPermission = new AccordPermission();
       $em = $this->getDoctrine()->getManager();
       $accordPermission->setdateAccordPermission(new \DateTime());
       $accordPermission->setvaleur(0);
       $id->setEtat(0);
       $id->setstatus(1);
       $accordPermission->setaccordeur($this->getUser());
       $accordPermission->setdemande($id);

       $em->persist($accordPermission);
       $em->flush();

       $this->addFlash('notice','Demande rejetée avec success');
        
        return $this->redirectToRoute('demandePermissionListe');

    }


}
