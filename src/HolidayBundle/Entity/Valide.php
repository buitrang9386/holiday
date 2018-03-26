<?php

namespace HolidayBundle\Entity;

/**
 * Valide
 */
class Valide
{
    /**
     * @var \DateTime
     */
    private $valideFrom;

    /**
     * @var \DateTime
     */
    private $valideTo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $holidayStocks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->holidayStocks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set valideFrom
     *
     * @param \DateTime $valideFrom
     *
     * @return Valide
     */
    public function setValideFrom($valideFrom)
    {
        $this->valideFrom = $valideFrom;

        return $this;
    }

    /**
     * Get valideFrom
     *
     * @return \DateTime
     */
    public function getValideFrom()
    {
        return $this->valideFrom;
    }

    /**
     * Set valideTo
     *
     * @param \DateTime $valideTo
     *
     * @return Valide
     */
    public function setValideTo($valideTo)
    {
        $this->valideTo = $valideTo;

        return $this;
    }

    /**
     * Get valideTo
     *
     * @return \DateTime
     */
    public function getValideTo()
    {
        return $this->valideTo;
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
     * Add holidayStock
     *
     * @param \HolidayBundle\Entity\HolidayStock $holidayStock
     *
     * @return Valide
     */
    public function addHolidayStock(\HolidayBundle\Entity\HolidayStock $holidayStock)
    {
        $this->holidayStocks[] = $holidayStock;

        return $this;
    }

    /**
     * Remove holidayStock
     *
     * @param \HolidayBundle\Entity\HolidayStock $holidayStock
     */
    public function removeHolidayStock(\HolidayBundle\Entity\HolidayStock $holidayStock)
    {
        $this->holidayStocks->removeElement($holidayStock);
    }

    /**
     * Get holidayStocks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHolidayStocks()
    {
        return $this->holidayStocks;
    }
}

