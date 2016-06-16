<?php

namespace HackathonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HackathonBundle:Default:index.html.twig');
    }

    public function resultAction()
    {
        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        
        $user = $em->getRepository('user')->findAll();


        return $this->render('HackathonBundle:Default:result.html.twig');
    }
}
