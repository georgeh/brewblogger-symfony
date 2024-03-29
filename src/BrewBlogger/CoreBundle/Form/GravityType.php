<?php
namespace BrewBlogger\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class GravityType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'precision' => '3',
            'attr' => array(
                'class' => 'span1',
            )
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