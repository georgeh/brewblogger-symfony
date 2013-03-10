<?php

namespace BrewBlogger\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class MainNav extends ContainerAware
{
    public function main(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Batches', array('route' => 'brewblogger_core_batch_index'));
        $menu->addChild('Recipes', array('uri' => '#'));
        $menu->addChild('About', array('uri' => '#'));
        $menu->addChild('Reference', array('uri' => '#'));
        $menu->addChild('Calculators', array('uri' => '#'));
        $menu->addChild('Calendar', array('uri' => '#'));
        $menu->addChild('Admin', array('uri' => '#'));
        $menu->addChild('Log Out', array('uri' => '#'));

        return $menu;
    }
}
