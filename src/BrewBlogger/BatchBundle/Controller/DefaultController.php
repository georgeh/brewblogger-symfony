<?php

namespace BrewBlogger\BatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BrewBlogger\BatchBundle\Form\BrewingType;

class DefaultController extends Controller
{
    /**
     * 
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $batch = $this->getDoctrine()
            ->getRepository('BrewBloggerBatchBundle:Brewing')
            ->find($id);
        
        
        return $this->render('BrewBloggerBatchBundle:Default:index.html.twig', array('batch' => $batch));
    }
    
    /**
     * 
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id)
    {
        $batch = $this->getDoctrine()
            ->getRepository('BrewBloggerBatchBundle:Brewing')
            ->find($id);
        
        $form = $this->createForm(new BrewingType(), $batch);
        
        return $this->render('BrewBloggerBatchBundle:Default:edit.html.twig', 
                             array('batch' => $batch,
                                   'form'  => $form->createView(),
                             ));
    }
}
