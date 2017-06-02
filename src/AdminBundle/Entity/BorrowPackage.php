<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowPackage
 *
 * @ORM\Table(name="borrow_package")
 * @ORM\Entity
 */
class BorrowPackage
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="source_name", type="string", length=255, nullable=false)
     */
    private $sourceName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="package_type", type="boolean", nullable=true)
     */
    private $packageType;

    /**
     * @var string
     *
     * @ORM\Column(name="total_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $totalMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=10, nullable=false)
     */
    private $duration = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="string", length=20, nullable=false)
     */
    private $rate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="real_rate", type="string", length=20, nullable=false)
     */
    private $realRate = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="area", type="boolean", nullable=false)
     */
    private $area = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="contract_type", type="boolean", nullable=true)
     */
    private $contractType;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_number", type="string", length=255, nullable=true)
     */
    private $contractNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="borrower_company", type="string", length=255, nullable=true)
     */
    private $borrowerCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="deputy", type="string", length=255, nullable=true)
     */
    private $deputy;

    /**
     * @var string
     *
     * @ORM\Column(name="business_licence", type="string", length=255, nullable=true)
     */
    private $businessLicence;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="risk_management", type="text", length=65535, nullable=true)
     */
    private $riskManagement;

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="text", length=65535, nullable=true)
     */
    private $pic;

    /**
     * @var string
     *
     * @ORM\Column(name="serie_name", type="string", length=255, nullable=true)
     */
    private $serieName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="orders", type="boolean", nullable=true)
     */
    private $orders;

    /**
     * @var string
     *
     * @ORM\Column(name="zd_number", type="string", length=255, nullable=true)
     */
    private $zdNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="project_company", type="string", length=255, nullable=true)
     */
    private $projectCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="id_card", type="string", length=255, nullable=true)
     */
    private $idCard;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return BorrowPackage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sourceName
     *
     * @param string $sourceName
     *
     * @return BorrowPackage
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;

        return $this;
    }

    /**
     * Get sourceName
     *
     * @return string
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * Set packageType
     *
     * @param boolean $packageType
     *
     * @return BorrowPackage
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;

        return $this;
    }

    /**
     * Get packageType
     *
     * @return boolean
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * Set totalMoney
     *
     * @param string $totalMoney
     *
     * @return BorrowPackage
     */
    public function setTotalMoney($totalMoney)
    {
        $this->totalMoney = $totalMoney;

        return $this;
    }

    /**
     * Get totalMoney
     *
     * @return string
     */
    public function getTotalMoney()
    {
        return $this->totalMoney;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return BorrowPackage
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return BorrowPackage
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set realRate
     *
     * @param string $realRate
     *
     * @return BorrowPackage
     */
    public function setRealRate($realRate)
    {
        $this->realRate = $realRate;

        return $this;
    }

    /**
     * Get realRate
     *
     * @return string
     */
    public function getRealRate()
    {
        return $this->realRate;
    }

    /**
     * Set area
     *
     * @param boolean $area
     *
     * @return BorrowPackage
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return boolean
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set contractType
     *
     * @param boolean $contractType
     *
     * @return BorrowPackage
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return boolean
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set contractNumber
     *
     * @param string $contractNumber
     *
     * @return BorrowPackage
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * Get contractNumber
     *
     * @return string
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * Set borrowerCompany
     *
     * @param string $borrowerCompany
     *
     * @return BorrowPackage
     */
    public function setBorrowerCompany($borrowerCompany)
    {
        $this->borrowerCompany = $borrowerCompany;

        return $this;
    }

    /**
     * Get borrowerCompany
     *
     * @return string
     */
    public function getBorrowerCompany()
    {
        return $this->borrowerCompany;
    }

    /**
     * Set deputy
     *
     * @param string $deputy
     *
     * @return BorrowPackage
     */
    public function setDeputy($deputy)
    {
        $this->deputy = $deputy;

        return $this;
    }

    /**
     * Get deputy
     *
     * @return string
     */
    public function getDeputy()
    {
        return $this->deputy;
    }

    /**
     * Set businessLicence
     *
     * @param string $businessLicence
     *
     * @return BorrowPackage
     */
    public function setBusinessLicence($businessLicence)
    {
        $this->businessLicence = $businessLicence;

        return $this;
    }

    /**
     * Get businessLicence
     *
     * @return string
     */
    public function getBusinessLicence()
    {
        return $this->businessLicence;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return BorrowPackage
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BorrowPackage
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
     * Set riskManagement
     *
     * @param string $riskManagement
     *
     * @return BorrowPackage
     */
    public function setRiskManagement($riskManagement)
    {
        $this->riskManagement = $riskManagement;

        return $this;
    }

    /**
     * Get riskManagement
     *
     * @return string
     */
    public function getRiskManagement()
    {
        return $this->riskManagement;
    }

    /**
     * Set pic
     *
     * @param string $pic
     *
     * @return BorrowPackage
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set serieName
     *
     * @param string $serieName
     *
     * @return BorrowPackage
     */
    public function setSerieName($serieName)
    {
        $this->serieName = $serieName;

        return $this;
    }

    /**
     * Get serieName
     *
     * @return string
     */
    public function getSerieName()
    {
        return $this->serieName;
    }

    /**
     * Set orders
     *
     * @param boolean $orders
     *
     * @return BorrowPackage
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return boolean
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set zdNumber
     *
     * @param string $zdNumber
     *
     * @return BorrowPackage
     */
    public function setZdNumber($zdNumber)
    {
        $this->zdNumber = $zdNumber;

        return $this;
    }

    /**
     * Get zdNumber
     *
     * @return string
     */
    public function getZdNumber()
    {
        return $this->zdNumber;
    }

    /**
     * Set projectCompany
     *
     * @param string $projectCompany
     *
     * @return BorrowPackage
     */
    public function setProjectCompany($projectCompany)
    {
        $this->projectCompany = $projectCompany;

        return $this;
    }

    /**
     * Get projectCompany
     *
     * @return string
     */
    public function getProjectCompany()
    {
        return $this->projectCompany;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return BorrowPackage
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set idCard
     *
     * @param string $idCard
     *
     * @return BorrowPackage
     */
    public function setIdCard($idCard)
    {
        $this->idCard = $idCard;

        return $this;
    }

    /**
     * Get idCard
     *
     * @return string
     */
    public function getIdCard()
    {
        return $this->idCard;
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
}
