<?php

namespace BrewBlogger\BatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HopAdditionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('weight');
        $builder->add('alphaAcid');
        $builder->add('time');
        $builder->add('purpose');
        $builder->add('use');
        $builder->add('form');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrewBlogger\BatchBundle\Entity\HopAddition'
        ));
    }

    public function getName()
    {
        return 'brewblogger_batchbundle_hopadditiontype';
    }
}
