<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/editorial/", name="editorial")
     */
    public function editorialAction(Request $request)
    {
        return $this->render('default/editorial.html.twig'); 
    }

    /**
     * @Route("/web/", name="web")
     */
     public function webAction(Request $request)
     {
        return $this->render('default/web.html.twig');
     }

    /**
     * @Route("/identity/", name="identity")
     */
    public function identityAction(Request $request)
    {
        return $this->render('default/identity.html.twig');
    }

    /**
     * @Route("/miscellaneous/", name="miscellaneous")
     */
    public function miscellaneousAction(Request $request)
    {
        return $this->render('default/miscellaneous.html.twig');
    }
}
