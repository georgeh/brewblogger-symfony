<?php
namespace BrewBlogger\BatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class GravityType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'precision' => '3',
        ));
    }

    public function getParent()
    {
        return 'number';
    }

    public function getName()
    {
        return 'gravity';
    }
}