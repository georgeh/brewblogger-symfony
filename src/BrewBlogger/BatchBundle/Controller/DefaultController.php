<?php

namespace BrewBlogger\BatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * 
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($id)
    {
        $brewing = $this->getDoctrine()
            ->getRepository('BrewBloggerBatchBundle:Brewing')
            ->find($id);
        
        
        return $this->render('BrewBloggerBatchBundle:Default:index.html.twig', array('batch' => $brewing));
    }
}
