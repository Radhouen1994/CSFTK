<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StagiaiarebtsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenoml')
            ->add('cin',NumberType::class)
            ->add('specialite',ChoiceType::class, array(
        'choices'  => array(
            'TSIRA' => 'TSIRA',
            'TSMM' => 'TSMM',
        )))
            ->add('email',EmailType::class)
            ->add('pff')
            ->add('photo',FileType::class,array('data_class'=>null))
            /*->add('groupegroupe')
            ->add('sessionsession')*/
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Stagiaiarebts'
        ));
    }
}
