<?php
namespace BrewBlogger\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BrewBlogger\CoreBundle\Form\LoginType;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Description of LoginController
 *
 * @author George Hotelling <george@hotelling.net>
 */
class LoginController extends Controller {
    
    /**
     * @Route("/login", name="_brewblogger_login")
     * @Template()
     */
    public function loginAction()
    {
        $request = $this->get('request');
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                    SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $request->getSession()->get(
                    SecurityContext::AUTHENTICATION_ERROR
            );
        }
        
        $form = $this->createForm(new LoginType(), array(
            'username' => $request->getSession()->get(
                    SecurityContext::LAST_USERNAME)
        ));

        return array(
            'form'          => $form->createView(),
            'error'         => $error,
        );
    }

    /**
     * @Route("/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="_brewblogger_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }
}