<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pilot_parc_login_homepage
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'PilotParc\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pilot_parc_login_homepage',);
        }

        // pilot_parc_login_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'PilotParc\\LoginBundle\\Controller\\DefaultController::signupAction',  '_route' => 'pilot_parc_login_signup',);
        }

        // pilot_parc_login_logout
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'PilotParc\\LoginBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'pilot_parc_login_logout',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
