<?php

namespace HackathonBundle\Entity;

/**
 * Activites
 */
class Activites
{
    // CUSTOM CODE
    public function __toString()
    {
        return $this->nomActivite;
    }


    /* Variable(s) relation Doctrine */

    private $vacances;



    // GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     *
     */
    private $nomActivite;

    /**
     * @var string
     */
    private $texteActivite;


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
     * Set nomActivite
     *
     * @param string $nomActivite
     *
     * @return Activites
     */
    public function setNomActivite($nomActivite)
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    /**
     * Get nomActivite
     *
     * @return string
     */
    public function getNomActivite()
    {
        return $this->nomActivite;
    }

    /**
     * Set texteActivite
     *
     * @param string $texteActivite
     *
     * @return Activites
     */
    public function setTexteActivite($texteActivite)
    {
        $this->texteActivite = $texteActivite;

        return $this;
    }

    /**
     * Get texteActivite
     *
     * @return string
     */
    public function getTexteActivite()
    {
        return $this->texteActivite;
    }
}

