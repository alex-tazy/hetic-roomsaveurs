<?php

namespace HETIC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivreurController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICCoreBundle:Livreur:index.html.twig');
    }
}
