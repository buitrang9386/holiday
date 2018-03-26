<?php

namespace HolidayBundle\Entity;

/**
 * Employee
 */
class Employee
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var integer
     */
    private $code;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $numTel;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $debutContrat;

    /**
     * @var \DateTime
     */
    private $finContrat;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \HolidayBundle\Entity\User
     */
    private $user;

    /**
     * @var \HolidayBundle\Entity\Status
     */
    private $status;

    /**
     * @var \HolidayBundle\Entity\JobLevel
     */
    private $jobLevel;

    /**
     * @var \HolidayBundle\Entity\Department
     */
    private $department;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Employee
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Employee
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
     * Set code
     *
     * @param integer $code
     *
     * @return Employee
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Employee
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
     * Set numTel
     *
     * @param string $numTel
     *
     * @return Employee
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Employee
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set debutContrat
     *
     * @param \DateTime $debutContrat
     *
     * @return Employee
     */
    public function setDebutContrat($debutContrat)
    {
        $this->debutContrat = $debutContrat;

        return $this;
    }

    /**
     * Get debutContrat
     *
     * @return \DateTime
     */
    public function getDebutContrat()
    {
        return $this->debutContrat;
    }

    /**
     * Set finContrat
     *
     * @param \DateTime $finContrat
     *
     * @return Employee
     */
    public function setFinContrat($finContrat)
    {
        $this->finContrat = $finContrat;

        return $this;
    }

    /**
     * Get finContrat
     *
     * @return \DateTime
     */
    public function getFinContrat()
    {
        return $this->finContrat;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \HolidayBundle\Entity\User $user
     *
     * @return Employee
     */
    public function setUser(\HolidayBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \HolidayBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set status
     *
     * @param \HolidayBundle\Entity\Status $status
     *
     * @return Employee
     */
    public function setStatus(\HolidayBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \HolidayBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set jobLevel
     *
     * @param \HolidayBundle\Entity\JobLevel $jobLevel
     *
     * @return Employee
     */
    public function setJobLevel(\HolidayBundle\Entity\JobLevel $jobLevel = null)
    {
        $this->jobLevel = $jobLevel;

        return $this;
    }

    /**
     * Get jobLevel
     *
     * @return \HolidayBundle\Entity\JobLevel
     */
    public function getJobLevel()
    {
        return $this->jobLevel;
    }

    /**
     * Set department
     *
     * @param \HolidayBundle\Entity\Department $department
     *
     * @return Employee
     */
    public function setDepartment(\HolidayBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \HolidayBundle\Entity\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }
}

