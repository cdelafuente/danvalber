<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // editorial
        if (rtrim($pathinfo, '/') === '/editorial') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'editorial');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::editorialAction',  '_route' => 'editorial',);
        }

        // web
        if (rtrim($pathinfo, '/') === '/web') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'web');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::webAction',  '_route' => 'web',);
        }

        // identity
        if (rtrim($pathinfo, '/') === '/identity') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'identity');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::identityAction',  '_route' => 'identity',);
        }

        // miscellaneous
        if (rtrim($pathinfo, '/') === '/miscellaneous') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'miscellaneous');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::miscellaneousAction',  '_route' => 'miscellaneous',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
