<?php

namespace exialps\RessourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RessourcesBundle:Default:index.html.twig');
    }
}
