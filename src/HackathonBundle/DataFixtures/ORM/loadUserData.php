<?php

namespace HackathonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use HackathonBundle\Entity\User;

class loadUserData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $newUser1 = new User();
        $newUser1->setUsername('OuterAlchemy');
        $newUser1->setPlainPassword('superadmin');
        $newUser1->setEnabled(true);
        $newUser1->setEmail('contact.thomasmerlin@gmail.com');
        $newUser1->setRoles(array('ROLE_SUPER_ADMIN'));
        $newUser1->setNom('Merlin');
        $newUser1->setPrenom('Thomas');
        $newUser1->setAge(20);
        $newUser1->setVille('La Loupe');
        $manager->persist($newUser1);

        $newUser2 = new User();
        $newUser2->setUsername('Mothilde');
        $newUser2->setPlainPassword('superadmin');
        $newUser2->setEnabled(true);
        $newUser2->setEmail('mathildenavet@hotmail.com');
        $newUser2->setRoles(array('ROLE_SUPER_ADMIN'));
        $newUser2->setNom('Navet');
        $newUser2->setPrenom('Mathilde');
        $newUser2->setAge(32);
        $newUser2->setVille('Lille');
        $manager->persist($newUser2);

        $newUser3 = new User();
        $newUser3->setUsername('Emilie-28');
        $newUser3->setPlainPassword('superadmin');
        $newUser3->setEnabled(true);
        $newUser3->setEmail('iamparfaite83@gmail.com');
        $newUser3->setRoles(array('ROLE_SUPER_ADMIN'));
        $newUser3->setNom('Chartier');
        $newUser3->setPrenom('Emilie');
        $newUser3->setAge(32);
        $newUser3->setVille('Chartres');
        $manager->persist($newUser3);

        $newUser4 = new User();
        $newUser4->setUsername('liloo2040');
        $newUser4->setPlainPassword('superadmin');
        $newUser4->setEnabled(true);
        $newUser4->setEmail('e.dufour.89@gmail.com');
        $newUser4->setRoles(array('ROLE_SUPER_ADMIN'));
        $newUser4->setNom('Dufour');
        $newUser4->setPrenom('Elodie');
        $newUser4->setAge(30);
        $newUser4->setVille('Fontainebleau');
        $manager->persist($newUser4);

        $newUser5 = new User();
        $newUser5->setUsername('CelineLanglade');
        $newUser5->setPlainPassword('superadmin');
        $newUser5->setEnabled(true);
        $newUser5->setEmail('celine@wildcodeschool.com');
        $newUser5->setRoles(array('ROLE_SUPER_ADMIN'));
        $newUser5->setNom('Langlade');
        $newUser5->setPrenom('Celine');
        $newUser5->setAge(26);
        $newUser5->setVille('Nimes');
        $manager->persist($newUser5);

        $newUser6 = new User();
        $newUser6->setUsername('mephisto');
        $newUser6->setPlainPassword('superadmin');
        $newUser6->setEnabled(true);
        $newUser6->setEmail('mephisto@gmail.com');
        $newUser6->setRoles(array('ROLE_SUPER_ADMIN'));
        $newUser6->setNom('Martinez');
        $newUser6->setPrenom('Manuel');
        $newUser6->setAge(43);
        $newUser6->setVille('La Loupe');
        $manager->persist($newUser6);

        $manager->flush();
    }
}