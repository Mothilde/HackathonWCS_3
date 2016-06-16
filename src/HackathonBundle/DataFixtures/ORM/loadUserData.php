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
        $newUser1->setFacebook('https://www.facebook.com/merlinlenchanteur');
        $newUser1->setTwitter('https://twitter.com/merlinlenchanteur');
        $newUser1->setAge(20);
        $newUser1->setPhoto('abc');
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
        $newUser2->setFacebook('https://www.facebook.com/mathilde.navet.9');
        $newUser2->setTwitter('https://twitter.com/mothilde');
        $newUser2->setAge(30);
        $newUser2->setPhoto('abc');
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
        $newUser3->setFacebook('https://www.facebook.com/mimi');
        $newUser3->setTwitter('https://twitter.com/mimi');
        $newUser3->setAge(32);
        $newUser3->setPhoto('abc');
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
        $newUser4->setFacebook('https://www.facebook.com/elodie');
        $newUser4->setTwitter('https://twitter.com/elodie');
        $newUser4->setAge(30);
        $newUser4->setPhoto('abc');
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
        $newUser5->setFacebook('https://www.facebook.com/celine');
        $newUser5->setTwitter('https://twitter.com/celine');
        $newUser5->setAge(26);
        $newUser5->setPhoto('abc');
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
        $newUser6->setFacebook('https://www.facebook.com/manu');
        $newUser6->setTwitter('https://twitter.com/manu');
        $newUser6->setAge(43);
        $newUser6->setPhoto('abc');
        $newUser6->setVille('La Loupe');
        $manager->persist($newUser6);

        $manager->flush();
    }
}