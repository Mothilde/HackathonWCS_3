<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 17/06/16
 * Time: 10:09
 */

namespace HackathonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use HackathonBundle\Entity\Activites;

class loadActivitesData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $activite = new Activites();
        $activite->setNomActivite('Restaurants');
        $activite->setTexteActivite('Aller au resto !');
        $manager->persist($activite);

        $activite = new Activites();
        $activite->setNomActivite('Bar');
        $activite->setTexteActivite('Boire un coup !');
        $manager->persist($activite);

        $activite = new Activites();
        $activite->setNomActivite('Musée');
        $activite->setTexteActivite('Visiter un musée');
        $manager->persist($activite);

        $activite = new Activites();
        $activite->setNomActivite('Centre commercial');
        $activite->setTexteActivite('Faire les boutiques !');
        $manager->persist($activite);

        $activite = new Activites();
        $activite->setNomActivite('Boite de Nuit');
        $activite->setTexteActivite('Sortir en boîte !');
        $manager->persist($activite);

        $activite = new Activites();
        $activite->setNomActivite('Festival');
        $activite->setTexteActivite('Aller à un festival ou évènement culturel !');
        $manager->persist($activite);

        $manager->flush();
    }
}