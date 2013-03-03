<?php

namespace BrewBlogger\BatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HopAdditionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'attr' => array(
                'class' => 'span2',
            )
        ));
        $builder->add('weight', 'number', array(
            'attr' => array(
//                'append_input'  => 'oz.',
                'class'         => 'span1',
                'label'         => 'Weight (oz)',
            ),
        ));
        
        $builder->add('alphaAcid', 'number', array(
            'label'        => 'AA%',
            'attr' => array(
                'class'        => 'span1',
//                'append_input' => '%'
            ),
        ));
        
        $builder->add('time', 'integer', array(
            'attr' => array(
                'class'        => 'span1',
            )
        ));
        
        $builder->add('use', 'choice', array(
            'empty_value' => '',
            'choices'     => array(
                'Boil'       => 'Boil',
                'Dry Hop'    => 'Dry Hop',
                'Mash'       => 'Mash',
                'Aroma'      => 'Aroma',
                'First Wort' => 'First Wort',
            ),
            'attr'        => array(
                'class' => 'span2',
            ),
        ));
        
        $builder->add('purpose', 'choice', array(
            'empty_value' => '',
            'choices'     => array(
                'Bittering' => 'Bittering',
                'Flavor'    => 'Flavor',
                'Aroma'     => 'Aroma',
                'Both'      => 'Both',
            ),
            'attr'        => array(
                'class' => 'span2',
            ),
        ));
        
        $builder->add('form', 'choice', array(
            'empty_value' => '',
            'choices'     => array(
                'Pellets' => 'Pellets',
                'Plug'    => 'Plug',
                'Leaf'    => 'Leaf',
            ),
            'attr'        => array(
                'class' => 'span2',
            ),
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrewBlogger\BatchBundle\Entity\HopAddition'
        ));
    }

    public function getName()
    {
        return 'hopaddition';
    }
}
