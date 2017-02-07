<?php

namespace GudetamaFranceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GudetamaFranceBundle:Default:index.html.twig');
    }
}
