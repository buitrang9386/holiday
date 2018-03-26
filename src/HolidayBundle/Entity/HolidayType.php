<?php

namespace HolidayBundle\Entity;

/**
 * HolidayType
 */
class HolidayType
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $holidayRequests;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $holidayStocks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->holidayRequests = new \Doctrine\Common\Collections\ArrayCollection();
        $this->holidayStocks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return HolidayType
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return HolidayType
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Add holidayRequest
     *
     * @param \HolidayBundle\Entity\HolidayRequest $holidayRequest
     *
     * @return HolidayType
     */
    public function addHolidayRequest(\HolidayBundle\Entity\HolidayRequest $holidayRequest)
    {
        $this->holidayRequests[] = $holidayRequest;

        return $this;
    }

    /**
     * Remove holidayRequest
     *
     * @param \HolidayBundle\Entity\HolidayRequest $holidayRequest
     */
    public function removeHolidayRequest(\HolidayBundle\Entity\HolidayRequest $holidayRequest)
    {
        $this->holidayRequests->removeElement($holidayRequest);
    }

    /**
     * Get holidayRequests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHolidayRequests()
    {
        return $this->holidayRequests;
    }

    /**
     * Add holidayStock
     *
     * @param \HolidayBundle\Entity\HolidayStock $holidayStock
     *
     * @return HolidayType
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

