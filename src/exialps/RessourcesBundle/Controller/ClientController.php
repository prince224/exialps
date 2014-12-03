<?php

namespace exialps\RessourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function indexAction()
    {
        return $this->render('RessourcesBundle:Client:index.html.twig');
    }

    public function indexProprietaireAction()
    {
        return $this->render('RessourcesBundle:Client:indexProprietaire.html.twig');
    }

    public function creerFicheProprietaireAction()
    {
        return $this->render('RessourcesBundle:Client:propietaire.html.twig');
    }

    public function voirFicheProprietaireAction($id)
    {
        return $this->render('RessourcesBundle:Client:voirFicheProprietaire.html.twig');
    }

    public function modifierFicheProprietaireAction($id)
    {
        return $this->render('RessourcesBundle:Client:modifierFicheProprietaire.html.twig');
    }

    
}
