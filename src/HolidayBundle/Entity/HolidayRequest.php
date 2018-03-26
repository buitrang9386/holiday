<?php

namespace HolidayBundle\Entity;

/**
 * HolidayRequest
 */
class HolidayRequest
{
    /**
     * @var \DateTime
     */
    private $dateHolidayDebut;

    /**
     * @var \DateTime
     */
    private $dateHolidayEnd;

    /**
     * @var \DateTime
     */
    private $requestDate;

    /**
     * @var \DateTime
     */
    private $modifyOn;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \HolidayBundle\Entity\User
     */
    private $userRequest;

    /**
     * @var \HolidayBundle\Entity\User
     */
    private $userApproval;

    /**
     * @var \HolidayBundle\Entity\HolidayType
     */
    private $HolidayType;


    /**
     * Set dateHolidayDebut
     *
     * @param \DateTime $dateHolidayDebut
     *
     * @return HolidayRequest
     */
    public function setDateHolidayDebut($dateHolidayDebut)
    {
        $this->dateHolidayDebut = $dateHolidayDebut;

        return $this;
    }

    /**
     * Get dateHolidayDebut
     *
     * @return \DateTime
     */
    public function getDateHolidayDebut()
    {
        return $this->dateHolidayDebut;
    }

    /**
     * Set dateHolidayEnd
     *
     * @param \DateTime $dateHolidayEnd
     *
     * @return HolidayRequest
     */
    public function setDateHolidayEnd($dateHolidayEnd)
    {
        $this->dateHolidayEnd = $dateHolidayEnd;

        return $this;
    }

    /**
     * Get dateHolidayEnd
     *
     * @return \DateTime
     */
    public function getDateHolidayEnd()
    {
        return $this->dateHolidayEnd;
    }

    /**
     * Set requestDate
     *
     * @param \DateTime $requestDate
     *
     * @return HolidayRequest
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set modifyOn
     *
     * @param \DateTime $modifyOn
     *
     * @return HolidayRequest
     */
    public function setModifyOn($modifyOn)
    {
        $this->modifyOn = $modifyOn;

        return $this;
    }

    /**
     * Get modifyOn
     *
     * @return \DateTime
     */
    public function getModifyOn()
    {
        return $this->modifyOn;
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
     * Set userRequest
     *
     * @param \HolidayBundle\Entity\User $userRequest
     *
     * @return HolidayRequest
     */
    public function setUserRequest(\HolidayBundle\Entity\User $userRequest = null)
    {
        $this->userRequest = $userRequest;

        return $this;
    }

    /**
     * Get userRequest
     *
     * @return \HolidayBundle\Entity\User
     */
    public function getUserRequest()
    {
        return $this->userRequest;
    }

    /**
     * Set userApproval
     *
     * @param \HolidayBundle\Entity\User $userApproval
     *
     * @return HolidayRequest
     */
    public function setUserApproval(\HolidayBundle\Entity\User $userApproval = null)
    {
        $this->userApproval = $userApproval;

        return $this;
    }

    /**
     * Get userApproval
     *
     * @return \HolidayBundle\Entity\User
     */
    public function getUserApproval()
    {
        return $this->userApproval;
    }

    /**
     * Set holidayType
     *
     * @param \HolidayBundle\Entity\HolidayType $holidayType
     *
     * @return HolidayRequest
     */
    public function setHolidayType(\HolidayBundle\Entity\HolidayType $holidayType = null)
    {
        $this->HolidayType = $holidayType;

        return $this;
    }

    /**
     * Get holidayType
     *
     * @return \HolidayBundle\Entity\HolidayType
     */
    public function getHolidayType()
    {
        return $this->HolidayType;
    }
}

