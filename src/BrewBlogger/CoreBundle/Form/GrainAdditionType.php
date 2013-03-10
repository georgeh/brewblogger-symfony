<?php

namespace BrewBlogger\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GrainAdditionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('weight', 'number', array(
            'attr' => array(
                'class'        => 'span1',
                'append_input' => 'lbs.'
            ),
        ));
        $builder->add('name', 'text', array(
            'attr' => array('class' => 'span4'),
        ));
//        $builder->add('malt', 'entity', array(
//            'class'    => 'BrewBloggerCoreBundle:Malt',
//            'property' => 'name',
//        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrewBlogger\CoreBundle\Entity\GrainAddition'
        ));
    }

    public function getName()
    {
        return 'grain_addition';
    }
}
