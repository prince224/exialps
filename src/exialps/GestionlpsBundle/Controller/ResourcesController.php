<?php

namespace exialps\GestionlpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmployersController extends Controller
{
    public function indexAction()
    {
        return $this->render('exialpsGestionlpsBundle:Employers:index.html.twig');
    }
}
