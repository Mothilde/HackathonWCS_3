<?php

namespace HackathonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HackathonBundle\Entity\Vacances;
use HackathonBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HackathonBundle:Default:index.html.twig');
    }

    public function getVacancesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $vacances = $em->getRepository('HackathonBundle:Vacances')->findAll();
        
        return $this->render('HackathonBundle:Default:mesvacances.html.twig', array(
            'vacances' => $vacances
        ));
    }

}
