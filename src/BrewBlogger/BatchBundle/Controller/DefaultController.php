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
        
        $originalBatch = clone $batch;
        $form = $this->createForm(new BrewingType(), $batch);
        
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();

            $form->bind($request);
            if ($form->isValid()) {
                $this->updateAssociations($originalBatch, $batch, $em);
                
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
    
    /**
     * 
     * @param \BrewBlogger\BatchBundle\Entity\Brewing $originalBrewing
     * @param \BrewBlogger\BatchBundle\Entity\Brewing $updatedBrewing
     * @param \Doctrine\ORM\EntityManager $em
     */
    protected function updateAssociations($originalBrewing, $updatedBrewing, $em)
    {
        $collections = array('Extracts', 'Grains', 'Adjuncts', 'MiscIngredients', 'Hops');
        foreach ($collections as $type) {
            // Plan on deleting all hops, except for the ones that have been submitted
            $itemsToDelete = array();
            foreach ($originalBrewing->{'get' . $type}() as $item) {
                $itemsToDelete[] = $item;
            }

            foreach ($updatedBrewing->{'get' . $type}() as $item) {
                // Persist new hop additions
                if (!$item->getBatch()) {
                    $item->setBatch($updatedBrewing);
                }

                // Find out which hops have been removed
                foreach ($itemsToDelete as $key => $toDel) {
                    if ($toDel->getId() == $item->getId()) {
                        unset($itemsToDelete[$key]);
                        break;
                    }
                }
            }

            foreach ($itemsToDelete as $item) {
                $em->remove($item);
            }
        }
    }
}
