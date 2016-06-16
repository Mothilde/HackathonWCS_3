<?php

namespace HackathonBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{
    // CUSTOM CODE

    private $amis;
    
    private $vacances;
    
    private $facebook;
    
    private $twitter;
    
    private $photo;

    // GENERATED CODE
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $ville;


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
     * @return User
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
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /* notre code */

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return User
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Add ami
     *
     * @param \HackathonBundle\Entity\User $ami
     *
     * @return User
     */
    public function addAmi(\HackathonBundle\Entity\User $ami)
    {
        $this->amis[] = $ami;

        return $this;
    }

    /**
     * Remove ami
     *
     * @param \HackathonBundle\Entity\User $ami
     */
    public function removeAmi(\HackathonBundle\Entity\User $ami)
    {
        $this->amis->removeElement($ami);
    }

    /**
     * Get amis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAmis()
    {
        return $this->amis;
    }

    /**
     * Add vacance
     *
     * @param \HackathonBundle\Entity\Vacances $vacance
     *
     * @return User
     */
    public function addVacance(\HackathonBundle\Entity\Vacances $vacance)
    {
        $this->vacances[] = $vacance;

        return $this;
    }

    /**
     * Remove vacance
     *
     * @param \HackathonBundle\Entity\Vacances $vacance
     */
    public function removeVacance(\HackathonBundle\Entity\Vacances $vacance)
    {
        $this->vacances->removeElement($vacance);
    }

    /**
     * Get vacances
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVacances()
    {
        return $this->vacances;
    }
}
