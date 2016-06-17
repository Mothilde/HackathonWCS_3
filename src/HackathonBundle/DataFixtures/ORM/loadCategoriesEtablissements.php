<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15/06/16
 * Time: 21:52
 */

namespace HackathonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use HackathonBundle\Entity\CategoriesEtablissements;
use HackathonBundle\Entity\User;

class loadCategoriesEtablissements extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new CategoriesEtablissements();
        $categorie1->setCategorie("Hôtels");
        $manager->persist($categorie1);

        $categorie2 = new CategoriesEtablissements();
        $categorie2->setCategorie("Gites");
        $manager->persist($categorie2);

        $categorie3 = new CategoriesEtablissements();
        $categorie3->setCategorie("Restaurants");
        $manager->persist($categorie3);

        $categorie4 = new CategoriesEtablissements();
        $categorie4->setCategorie("Musées");
        $manager->persist($categorie4);

        $manager->flush();
    }

}