<?php

namespace BrewBlogger\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class MainNav extends ContainerAware
{
    public function main(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Batches', array(
            'route' => 'brewblogger_core_batch_index')
        );
        $menu->addChild('Recipes', array('uri' => '#'));
        $menu->addChild('About', array('uri' => '#'));
        $menu->addChild('Reference', array('uri' => '#'));
        $menu->addChild('Calculators', array('uri' => '#'));
        $menu->addChild('Calendar', array('uri' => '#'));
        
        $security = $this->container->get('security.context');
        if ($security->isGranted('ROLE_ADMIN')) {
            $menu->addChild('Admin', array('uri' => '#'));        
        }
        
        if ($security->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $menu->addChild('Log Out', array('route' => '_brewblogger_logout'));
        } else {
            $menu->addChild('Log In', array('route' => '_brewblogger_login'));
        }
        

        return $menu;
    }
}
