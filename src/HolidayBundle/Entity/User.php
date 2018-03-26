<?php

namespace HolidayBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;
    private  $passwordOrginal; 

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \HolidayBundle\Entity\Employee
     */
    private $employee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $approvalsApprover;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $approvalsApprovee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $holidayRequest;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $holidayApproval;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $holidayStocks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->approvalsApprover = new \Doctrine\Common\Collections\ArrayCollection();
        $this->approvalsApprovee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->holidayRequest = new \Doctrine\Common\Collections\ArrayCollection();
        $this->holidayApproval = new \Doctrine\Common\Collections\ArrayCollection();
        $this->holidayStocks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
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
     * Set employee
     *
     * @param \HolidayBundle\Entity\Employee $employee
     *
     * @return User
     */
    public function setEmployee(\HolidayBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \HolidayBundle\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Add approvalsApprover
     *
     * @param \HolidayBundle\Entity\Approval $approvalsApprover
     *
     * @return User
     */
    public function addApprovalsApprover(\HolidayBundle\Entity\Approval $approvalsApprover)
    {
        $this->approvalsApprover[] = $approvalsApprover;

        return $this;
    }

    /**
     * Remove approvalsApprover
     *
     * @param \HolidayBundle\Entity\Approval $approvalsApprover
     */
    public function removeApprovalsApprover(\HolidayBundle\Entity\Approval $approvalsApprover)
    {
        $this->approvalsApprover->removeElement($approvalsApprover);
    }

    /**
     * Get approvalsApprover
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprovalsApprover()
    {
        return $this->approvalsApprover;
    }

    /**
     * Add approvalsApprovee
     *
     * @param \HolidayBundle\Entity\Approval $approvalsApprovee
     *
     * @return User
     */
    public function addApprovalsApprovee(\HolidayBundle\Entity\Approval $approvalsApprovee)
    {
        $this->approvalsApprovee[] = $approvalsApprovee;

        return $this;
    }

    /**
     * Remove approvalsApprovee
     *
     * @param \HolidayBundle\Entity\Approval $approvalsApprovee
     */
    public function removeApprovalsApprovee(\HolidayBundle\Entity\Approval $approvalsApprovee)
    {
        $this->approvalsApprovee->removeElement($approvalsApprovee);
    }

    /**
     * Get approvalsApprovee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprovalsApprovee()
    {
        return $this->approvalsApprovee;
    }

    /**
     * Add holidayRequest
     *
     * @param \HolidayBundle\Entity\HolidayRequest $holidayRequest
     *
     * @return User
     */
    public function addHolidayRequest(\HolidayBundle\Entity\HolidayRequest $holidayRequest)
    {
        $this->holidayRequest[] = $holidayRequest;

        return $this;
    }

    /**
     * Remove holidayRequest
     *
     * @param \HolidayBundle\Entity\HolidayRequest $holidayRequest
     */
    public function removeHolidayRequest(\HolidayBundle\Entity\HolidayRequest $holidayRequest)
    {
        $this->holidayRequest->removeElement($holidayRequest);
    }

    /**
     * Get holidayRequest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHolidayRequest()
    {
        return $this->holidayRequest;
    }

    /**
     * Add holidayApproval
     *
     * @param \HolidayBundle\Entity\HolidayRequest $holidayApproval
     *
     * @return User
     */
    public function addHolidayApproval(\HolidayBundle\Entity\HolidayRequest $holidayApproval)
    {
        $this->holidayApproval[] = $holidayApproval;

        return $this;
    }

    /**
     * Remove holidayApproval
     *
     * @param \HolidayBundle\Entity\HolidayRequest $holidayApproval
     */
    public function removeHolidayApproval(\HolidayBundle\Entity\HolidayRequest $holidayApproval)
    {
        $this->holidayApproval->removeElement($holidayApproval);
    }

    /**
     * Get holidayApproval
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHolidayApproval()
    {
        return $this->holidayApproval;
    }

    /**
     * Add holidayStock
     *
     * @param \HolidayBundle\Entity\HolidayStock $holidayStock
     *
     * @return User
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
    public function getPasswordOrginal() {
        return $this->passwordOrginal;
    }

    public function setPasswordOrginal($passwordOrginal) {
        $this->passwordOrginal = $passwordOrginal;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getSalt() {
        return null;
    }

    public function getUsername() {
        return $this->login;
    }

}

