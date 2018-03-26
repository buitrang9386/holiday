<?php

namespace HolidayBundle\Entity;

/**
 * HolidayStock
 */
class HolidayStock
{
    /**
     * @var integer
     */
    private $number;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \HolidayBundle\Entity\User
     */
    private $user;

    /**
     * @var \HolidayBundle\Entity\Valide
     */
    private $valide;

    /**
     * @var \HolidayBundle\Entity\HolidayType
     */
    private $holidayType;


    /**
     * Set number
     *
     * @param integer $number
     *
     * @return HolidayStock
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
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
     * @return HolidayStock
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
     * Set valide
     *
     * @param \HolidayBundle\Entity\Valide $valide
     *
     * @return HolidayStock
     */
    public function setValide(\HolidayBundle\Entity\Valide $valide = null)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return \HolidayBundle\Entity\Valide
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set holidayType
     *
     * @param \HolidayBundle\Entity\HolidayType $holidayType
     *
     * @return HolidayStock
     */
    public function setHolidayType(\HolidayBundle\Entity\HolidayType $holidayType = null)
    {
        $this->holidayType = $holidayType;

        return $this;
    }

    /**
     * Get holidayType
     *
     * @return \HolidayBundle\Entity\HolidayType
     */
    public function getHolidayType()
    {
        return $this->holidayType;
    }
}

