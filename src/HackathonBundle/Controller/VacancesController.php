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

        $form = $this->createForm(new VacancesType(), $vacances);

        return $this->render('HackathonBundle:Default:vacances.html.twig', array(
            'form' => $form->createView()
        ));

    }


}

