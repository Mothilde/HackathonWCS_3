<?php

namespace HackathonBundle\Controller;

use HackathonBundle\Form\VacancesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HackathonBundle\Entity\Vacances;

class VacancesController extends Controller
{
    public function formulaireAction ()
    {
        $vacances = new Vacances();
        $request = $this->getRequest();

        $form = $this->createForm(new VacancesType(), $vacances);
        $em = $this->getDoctrine()->getManager();
        
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted())
        {
            $em->persist($vacances);
            $em->flush();
            
            return $this->redirect($this->generateUrl('hackathon_mesvacances'));
        }

        return $this->render('HackathonBundle:Default:vacances.html.twig', array(
            'form' => $form->createView()
        ));

    }


}

