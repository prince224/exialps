<?php

namespace exialps\GestionlpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProspectController extends Controller
{
    public function indexAction()
    {
        return $this->render('exialpsGestionlpsBundle:Prospect:index.html.twig');
    }

    public function propietaireAction()
    {
        return $this->render('exialpsGestionlpsBundle:Prospect:propietaire.html.twig');
    }

    public function ajoutPropietaireAction()
    {
        return $this->render('exialpsGestionlpsBundle:Prospect:ajoutPropietaire.html.twig');
    }

    public function modificationPropietaireAction($id)
    {
        return $this->render('exialpsGestionlpsBundle:Prospect:modificationPropietaire.html.twig');
    }

    public function suppressionPropietaireAction($id)
    {
        return $this->render('exialpsGestionlpsBundle:Prospect:suppressionPropietaire.html.twig');
    }
}
