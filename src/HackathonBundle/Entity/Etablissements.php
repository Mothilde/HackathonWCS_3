<?php

namespace HackathonBundle\Entity;

/**
 * Etablissements
 */
class Etablissements
{
    // CUSTOM CODE

    private $categorie;

    private $poids;

    // GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var int
     */
    private $etoiles;

    /**
     * @var int
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Etablissements
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Etablissements
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set etoiles
     *
     * @param integer $etoiles
     *
     * @return Etablissements
     */
    public function setEtoiles($etoiles)
    {
        $this->etoiles = $etoiles;

        return $this;
    }

    /**
     * Get etoiles
     *
     * @return int
     */
    public function getEtoiles()
    {
        return $this->etoiles;
    }

    /**
     * Set latitude
     *
     * @param integer $latitude
     *
     * @return Etablissements
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return int
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Etablissements
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set categorie
     *
     * @param \HackathonBundle\Entity\CategoriesEtablissements $categorie
     *
     * @return Etablissements
     */
    public function setCategorie(\HackathonBundle\Entity\CategoriesEtablissements $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \HackathonBundle\Entity\CategoriesEtablissements
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set poids
     *
     * @param \HackathonBundle\Entity\PoidsEtablissements $poids
     *
     * @return Etablissements
     */
    public function setPoids(\HackathonBundle\Entity\PoidsEtablissements $poids = null)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return \HackathonBundle\Entity\PoidsEtablissements
     */
    public function getPoids()
    {
        return $this->poids;
    }
}
