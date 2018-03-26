<?php

namespace HolidayBundle\Entity;

/**
 * Approval
 */
class Approval
{
    /**
     * @var \DateTime
     */
    private $effectiveDate;

    /**
     * @var \DateTime
     */
    private $expiryDate;

    /**
     * @var string
     */
    private $modifyBy;

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
    private $userApprover;

    /**
     * @var \HolidayBundle\Entity\User
     */
    private $userApprovee;


    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     *
     * @return Approval
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     *
     * @return Approval
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set modifyBy
     *
     * @param string $modifyBy
     *
     * @return Approval
     */
    public function setModifyBy($modifyBy)
    {
        $this->modifyBy = $modifyBy;

        return $this;
    }

    /**
     * Get modifyBy
     *
     * @return string
     */
    public function getModifyBy()
    {
        return $this->modifyBy;
    }

    /**
     * Set modifyOn
     *
     * @param \DateTime $modifyOn
     *
     * @return Approval
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
     * Set userApprover
     *
     * @param \HolidayBundle\Entity\User $userApprover
     *
     * @return Approval
     */
    public function setUserApprover(\HolidayBundle\Entity\User $userApprover = null)
    {
        $this->userApprover = $userApprover;

        return $this;
    }

    /**
     * Get userApprover
     *
     * @return \HolidayBundle\Entity\User
     */
    public function getUserApprover()
    {
        return $this->userApprover;
    }

    /**
     * Set userApprovee
     *
     * @param \HolidayBundle\Entity\User $userApprovee
     *
     * @return Approval
     */
    public function setUserApprovee(\HolidayBundle\Entity\User $userApprovee = null)
    {
        $this->userApprovee = $userApprovee;

        return $this;
    }

    /**
     * Get userApprovee
     *
     * @return \HolidayBundle\Entity\User
     */
    public function getUserApprovee()
    {
        return $this->userApprovee;
    }
}

