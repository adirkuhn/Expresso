<?php

namespace Expresso\ExpressoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExpressoBundle:Default:index.html.twig');
    }
}
