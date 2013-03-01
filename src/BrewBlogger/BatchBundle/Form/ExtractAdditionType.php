<?php

namespace BrewBlogger\BatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtractAdditionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('extract', 'entity', array(
            'class'    => 'BrewBloggerBatchBundle:EquipProfiles',
            'property' => 'extract',
        ));
        $builder->add('weight', 'number');        
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrewBlogger\BatchBundle\Entity\ExtractAddition'
        ));
    }

    public function getName()
    {
        return 'extract_addition';
    }
}
