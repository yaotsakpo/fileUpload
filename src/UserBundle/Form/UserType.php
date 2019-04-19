<?php
namespace UserBundle\Form ;

use Symfony\Component\Form\AbstractType ;
use Symfony\Component\Form\FormBuilderInterface ;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType ;

class UserType extends AbstractType
{
    public function buildForm (FormBuilderInterface $builder, array $options)
    { $builder->add( 'roles' , ChoiceType::class, array(
        'attr' => array( 'class' => 'form-control' ,
            'style' => 'margin:5px 0;' ),
        'choices' =>
            [
                'ROLE_ADMIN' => 'ROLE_ADMIN' ,
                'ROLE_USER' => 'ROLE_USER',
                'ROLE_SUPER_ADMIN'=> 'ROLE_SUPER_ADMIN'
            ],
        'multiple' => true,
        'required' => true, ) ); 
    $builder->remove( 'plainPassword' ); }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType' ;
// Or for Symfony < 2.8
// return 'fos_user_registration';
    }
    public function getBlockPrefix ()
    {
        return 'app_user_registration' ; }
// For Symfony 2.x
    public function getName ()
    {
        return $this->getBlockPrefix(); } }