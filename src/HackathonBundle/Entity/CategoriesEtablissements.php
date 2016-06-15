<?php

namespace HackathonBundle\Entity;

/**
 * CategoriesEtablissements
 */
class CategoriesEtablissements
{
    // CUSTOM CODE
    
    private $etablissement;
    
    
    // GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $categorie;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return CategoriesEtablissements
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etablissement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add etablissement
     *
     * @param \HackathonBundle\Entity\Etablissements $etablissement
     *
     * @return CategoriesEtablissements
     */
    public function addEtablissement(\HackathonBundle\Entity\Etablissements $etablissement)
    {
        $this->etablissement[] = $etablissement;

        return $this;
    }

    /**
     * Remove etablissement
     *
     * @param \HackathonBundle\Entity\Etablissements $etablissement
     */
    public function removeEtablissement(\HackathonBundle\Entity\Etablissements $etablissement)
    {
        $this->etablissement->removeElement($etablissement);
    }

    /**
     * Get etablissement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
}
