<?php

namespace HackathonBundle\Entity;

/**
 * PoidsEtablissements
 */
class PoidsEtablissements
{
    // CUSTOM CODE
    
    private $etablissement;
    
    
    // GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $etablissementsId;

    /**
     * @var int
     */
    private $poids;


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
     * Set etablissementsId
     *
     * @param integer $etablissementsId
     *
     * @return PoidsEtablissements
     */
    public function setEtablissementsId($etablissementsId)
    {
        $this->etablissementsId = $etablissementsId;

        return $this;
    }

    /**
     * Get etablissementsId
     *
     * @return int
     */
    public function getEtablissementsId()
    {
        return $this->etablissementsId;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     *
     * @return PoidsEtablissements
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
    }
}
