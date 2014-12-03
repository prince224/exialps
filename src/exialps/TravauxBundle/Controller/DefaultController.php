<?php

namespace exialps\TravauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TravauxBundle:Default:index.html.twig', array('name' => $name));
    }
}
