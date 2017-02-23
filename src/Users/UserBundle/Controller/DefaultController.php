<?php

namespace Users\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsersUserBundle:Default:index.html.twig');
    }
}
