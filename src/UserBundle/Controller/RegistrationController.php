<?php

namespace UserBundle\Controller;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;

class RegistrationController extends Controller{


     /**
     * @Route("/users",name="users")
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request){

        $formFactory = $this->get('fos_user.registration.form.factory');

         /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $event = new FormEvent($form, $request);
                    $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

                    $userManager->updateUser($user);

                    if (null === $response = $event->getResponse()) {
                        $this->addFlash('notice','Bienvenue dans votre nouveau compte');

                        $url = $this->generateUrl('homepage');
                        $response = new RedirectResponse($url);
                    }

                    $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                    return $response;
                }

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

                if (null !== $response = $event->getResponse()) {
                    return $response;
                }
        }

        $userManager=$this->get('fos_user.user_manager');

        $users=$userManager->findUsers();


        return $this->render('@User/utilisateursList.html.twig',array('form'=>$form->createView(),'users'=>$users));
    }

    /**
     * @Route("/modUser/{id}",name="modUser")
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function editAction (Request $request,User $id)
    {
        $editForm = $this ->createForm('UserBundle\Form\UserType' , $id);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $em = $this ->getDoctrine()->getManager();
            $em->persist($id); 
            $em->flush();

            $this->addFlash('notice','Modification effecté avec success');

            return $this ->redirectToRoute('users');
        }
        
        return $this->render('@User/editUser.html.twig' , array(
            'edit_form' => $editForm->createView()));
    }

    /**
     * @Route("/effacerUser/{id}",name="effacerUser")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function sAction (User $id)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();

        $this->addFlash('notice','Suppression reussie');

        return $this->redirectToRoute('users');
    }



   

}