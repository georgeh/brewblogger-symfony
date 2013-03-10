<?php

namespace BrewBlogger\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MiscAdditionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'attr' => array('class' => 'span4'),
        ));
//        $builder->add('type');
//        $builder->add('use');
        $builder->add('time', 'text', array(
            'attr' => array('class' => 'span2')
        ));
        $builder->add('amount', 'text', array(
            'attr' => array('class' => 'span2')
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrewBlogger\CoreBundle\Entity\MiscAddition'
        ));
    }

    public function getName()
    {
        return 'misc_addition';
    }
}
