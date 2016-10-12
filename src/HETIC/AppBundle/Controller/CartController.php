<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICAppBundle:panier:panier.html.twig');
    }
}
