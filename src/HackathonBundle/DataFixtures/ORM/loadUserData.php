<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15/06/16
 * Time: 21:31
 */

namespace HackathonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use HackathonBundle\Entity\User

class loadUserData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $newUser1 = new User();
        $newUser1->setUsername('Superadmin');
        $newUser1->setPlainPassword('superadmin');
        $newUser1->setCategorie($this->getReference('SuperAdmin'));
        $newUser1->setEnabled(true);
        $newUser1->setEmail('Superadmin@gmail.com');
        $newUser1->setRoles(array('ROLE_SUPER_ADMIN'));
    }
}