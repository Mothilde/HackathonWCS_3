<?php

namespace HackathonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HackathonBundle\Entity\User;
use HackathonBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('HackathonBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    
}