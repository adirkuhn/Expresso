<?php

namespace Expresso\SetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SetupBundle:Default:index.html.twig');
    }
}
