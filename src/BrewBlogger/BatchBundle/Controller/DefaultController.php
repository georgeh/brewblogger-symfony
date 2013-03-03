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
        
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();

            // Plan on deleting all hops, except for the ones that have been submitted
            $hopsToDelete = array();
            foreach ($batch->getHops() as $hop) {
                $hopsToDelete[] = $hop;
            }
            
            $form->bind($request);
            if ($form->isValid()) {
                foreach ($batch->getHops() as $hop) {
                    // Persist new hop additions
                    if (!$hop->getBatch()) {
                        $hop->setBatch($batch);
                    }
                    
                    // Find out which hops have been removed
                    foreach ($hopsToDelete as $key => $toDel) {
                        if ($toDel->getId() == $hop->getId()) {
                            unset($hopsToDelete[$key]);
                            break;
                        }
                    }
                }
                
                foreach ($hopsToDelete as $hop) {
                    $em->remove($hop);
                }
                $em->persist($batch);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('notice','Updated');
                return $this->redirect($this->generateUrl('brew_blogger_batch_show', array('id' => $id)));
            }
        }
        
        return $this->render('BrewBloggerBatchBundle:Default:edit.html.twig', 
                             array('batch' => $batch,
                                   'form'  => $form->createView(),
                             ));
    }
    
}
