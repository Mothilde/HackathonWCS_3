<?php

namespace HackathonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use HackathonBundle\Entity\Vacances;

class loadVacancesData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $vacances1 = new Vacances();
        $vacances1->setNom('Mes vacances');
        $vacances1->setBudget(100);
        $vacances1->setDateDepart(new \DateTime(date('Y-m-d H:i:s')));
        $vacances1->setDateRetour(new \DateTime(date('Y-m-d H:i:s')));
        $manager->persist($vacances1);
        $manager->flush();
    }


}