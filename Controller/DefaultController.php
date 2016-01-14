<?php

namespace Shopall24\Bundle\Shopall24ReportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Shopall24ReportBundle:Default:index.html.twig', array('name' => $name));
    }
}
