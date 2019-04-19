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

class ImportationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('typeOperation',EntityType::class,array(
                        'class'=>'AppBundle\Entity\TypeOperation',
                        'choice_label'=>'libelleTypeOperation',
                        'choice_value'=>'id',
                        'placeholder'=>'-Selectionner-',
                        'expanded'=>false,
                        'multiple'=>false,
                        'attr'=> ['class'=>'form-control','multiple'=>false],
                    ))
            ->add('mois',DateType::class,array('widget' => 'single_text',
                        'invalid_message' => 'Le mois saisit ne correspond pas veuillez la corriger',
                        'html5'=>true,'format' => 'MM'))
            ->add('annee',DateType::class,array('widget' => 'single_text',
                        'html5'=>true,'format' => 'yyyy',
                        'invalid_message' => 'L\'année saisie ne correspond pas veuillez la corriger',
                        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Importation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_importation';
    }


}
