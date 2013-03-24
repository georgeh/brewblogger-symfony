<?php

namespace BrewBlogger\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Login form
 *
 * @author George Hotelling <george@hotelling.net>
 */
class LoginType extends AbstractType {
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('_username');
        $builder->add('_password', 'password');
    }
}
