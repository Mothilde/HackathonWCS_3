<?php

namespace HackathonBundle\Entity;

/**
 * Vacances
 */
class Vacances
{
    // CUSTOM CODE

    private $participants;


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
     * @var \DateTime
     */
    private $dateDepart;

    /**
     * @var \DateTime
     */
    private $dateRetour;

    /**
     * @var int
     */
    private $budget;


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
     * @return Vacances
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
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Vacances
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     *
     * @return Vacances
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set budget
     *
     * @param integer $budget
     *
     * @return Vacances
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return int
     */
    public function getBudget()
    {
        return $this->budget;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add participant
     *
     * @param \HackathonBundle\Entity\User $participant
     *
     * @return Vacances
     */
    public function addParticipant(\HackathonBundle\Entity\User $participant)
    {
        $this->participants[] = $participant;

        return $this;
    }

    /**
     * Remove participant
     *
     * @param \HackathonBundle\Entity\User $participant
     */
    public function removeParticipant(\HackathonBundle\Entity\User $participant)
    {
        $this->participants->removeElement($participant);
    }

    /**
     * Get participants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipants()
    {
        return $this->participants;
    }
}
