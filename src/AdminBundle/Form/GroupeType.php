<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('specialite',ChoiceType::class, array(
                'choices'  => array(
                    'TSIRA' => 'TSIRA',
                    'TSMM' => 'TSMM',
                )))
            ->add('emploi',FileType::class,array('multiple'=>true,'data_class'=>null))
            ->add('cal',FileType::class,array('data_class'=>null,'label'=>'Calendrier'))
          //  ->add('path',FileType::class,array('data_class'=>null,'label'=>'path'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Groupe'
        ));
    }
}
