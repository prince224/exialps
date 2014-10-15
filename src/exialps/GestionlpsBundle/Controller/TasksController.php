<?php

namespace exialps\GestionlpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TasksController extends Controller
{
    public function indexAction()
    {
        return $this->render('exialpsGestionlpsBundle:Tasks:index.html.twig');
    }
}
