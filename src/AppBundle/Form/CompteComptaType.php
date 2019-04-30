<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompteComptaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('num',TextType::class,array('attr'=>['class'=>'form-control']))
        ->add('libelle',TextType::class,array('attr'=>['class'=>'form-control']))
        ->add('description',TextareaType::class,array('attr'=>['class'=>'form-control']))
        ->add('classCompta',EntityType::class,array(
                        'class'=>'AppBundle\Entity\classCompta',
                        'choice_label'=>'num',
                        'choice_value'=>'id',
                        'placeholder'=>'-Selectionner-',
                        'expanded'=>false,
                        'multiple'=>false,
                        'attr'=> ['class'=>'form-control','multiple'=>false],
                    ))
        ->add('parent',EntityType::class,array(
                        'class'=>'AppBundle\Entity\CompteCompta',
                        'choice_label'=>'libelle',
                        'choice_value'=>'id',
                        'placeholder'=>'-Selectionner-',
                        'expanded'=>false,
                        'multiple'=>false,
                        'required'=>false,
                        'attr'=> ['class'=>'form-control','multiple'=>false,],
                    ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CompteCompta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_comptecompta';
    }


}
