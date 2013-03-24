<?php

namespace BrewBlogger\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use BrewBlogger\CoreBundle\Form\BrewingType;
use \BrewBlogger\CoreBundle\Entity\Brewing;


/**
 * @Route("/batch")
 */
class BatchController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     * @return array
     */
    public function indexAction()
    {
        $batches = $this->getDoctrine()
                        ->getRepository('BrewBloggerCoreBundle:Brewing')
                        ->findAll();
        return array('batches' => $batches);
    }

    /**
     * @Template("BrewBloggerCoreBundle:Batch:new.html.twig")
     * @Route("/new")
     * @Secure(roles="ROLE_USER")
     */
    public function newAction()
    {
        $batch = new Brewing();
        $form = $this->createForm(new BrewingType(), $batch);
        
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($batch);
                $em->flush();
                $this->get('session')
                     ->getFlashBag()
                     ->add('notice', 'Created ' . $batch->getName());
                return $this->redirect(
                        $this->generateUrl('brewblogger_core_batch_show', 
                                           array('id' => $batch->getId()))
                );
            }
        }
        return array('form' => $form->createView());
    }

    /**
     *
     * @Route("/{id}", requirements={"id" = "\d+"})
     * @Template()
     * @param string $id
     * @return array
     */
    public function showAction($id)
    {
        $batch = $this->getDoctrine()
            ->getRepository('BrewBloggerCoreBundle:Brewing')
            ->find($id);
        
        return array('batch' => $batch);
    }
    
    /**
     * @Route("/{id}/edit")
     * @Template()
     * @Secure(roles="ROLE_USER")
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id)
    {
        $batch = $this->getDoctrine()
            ->getRepository('BrewBloggerCoreBundle:Brewing')
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
                
                $this->get('session')->getFlashBag()->add('notice', 'Updated');
                return $this->redirect(
                        $this->generateUrl('brewblogger_core_batch_show', 
                                           array('id' => $id))
                );
            }
        }
        
        return array(
            'batch' => $batch,
            'form'  => $form->createView(),
        );
    }
    
    /**
     * 
     * @param \BrewBlogger\CoreBundle\Entity\Brewing $originalBrewing
     * @param \BrewBlogger\CoreBundle\Entity\Brewing $newBrewing
     * @param \Doctrine\ORM\EntityManager $em
     */
    protected function updateAssociations($originalBrewing, $newBrewing, $em)
    {
        
        $collections = array('Extracts', 'Grains', 'Adjuncts', 
                             'MiscIngredients', 'Hops');
        foreach ($collections as $type) {
            // Plan on deleting all hops, except for submitted ones
            $itemsToDelete = array();
            foreach ($originalBrewing->{'get' . $type}() as $item) {
                $itemsToDelete[] = $item;
            }

            foreach ($newBrewing->{'get' . $type}() as $item) {
                // Persist new hop additions
                if (!$item->getBatch()) {
                    $item->setBatch($newBrewing);
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
