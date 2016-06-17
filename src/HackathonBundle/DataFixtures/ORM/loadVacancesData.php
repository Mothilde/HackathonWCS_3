<?php

namespace HackathonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use HackathonBundle\Entity\Vacances;

class loadVacancesData extends AbstractFixture

{
    public function load(ObjectManager $manager)
    {
        $newVacances1 = new Vacances();
        $newVacances1->setNom('Vacances à la mer');
        $newVacances1->setLieu('Nice');
        $newVacances1->setDateDepart(new \DateTime('2016-08-01'));
        $newVacances1->setDateRetour(new \DateTime('2016-08-15'));
        $newVacances1->setBudget(500);
        $manager->persist($newVacances1);

        $newVacances2 = new Vacances();
        $newVacances2->setNom('En route pour la montagne');
        $newVacances2->setLieu('Isola 2000');
        $newVacances2->setDateDepart(new \DateTime('2017-01-15'));
        $newVacances2->setDateRetour(new \DateTime('2017-01-30'));
        $newVacances2->setBudget(700);
        $manager->persist($newVacances2);

        $manager->flush();
    }
}