<?php

namespace BrewBlogger\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtractAdditionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder->add('extract', 'entity', array(
//            'class'    => 'BrewBloggerCoreBundle:EquipProfiles',
//            'property' => 'extract',
//        ));
        $builder->add('name', 'text', array(
            'attr' => array(
                'class' => 'span4',
            ),
        ));
        $builder->add('weight', 'number', array(
            'attr' => array(
                'append_input'  => 'lbs.',
                'class'         => 'span1',
            ),
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrewBlogger\CoreBundle\Entity\ExtractAddition'
        ));
    }

    public function getName()
    {
        return 'extract_addition';
    }
}
