<?php

namespace HackathonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HackathonBundle:Default:index.html.twig');
    }

}
