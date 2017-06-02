<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberCompinfo
 *
 * @ORM\Table(name="member_compinfo", indexes={@ORM\Index(name="u_id", columns={"u_id"})})
 * @ORM\Entity
 */
class MemberCompinfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="u_id", type="integer", nullable=false)
     */
    private $uId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="audit_order_no", type="string", length=32, nullable=false)
     */
    private $auditOrderNo;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=50, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="fixed_telephone", type="string", length=20, nullable=true)
     */
    private $fixedTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=100, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=100, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=100, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="address_province", type="string", length=255, nullable=true)
     */
    private $addressProvince;

    /**
     * @var string
     *
     * @ORM\Column(name="address_city", type="string", length=255, nullable=true)
     */
    private $addressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="address_district", type="string", length=255, nullable=true)
     */
    private $addressDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="license_no", type="string", length=50, nullable=true)
     */
    private $licenseNo;

    /**
     * @var string
     *
     * @ORM\Column(name="license_address", type="string", length=50, nullable=true)
     */
    private $licenseAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="license_expire_date", type="string", length=20, nullable=true)
     */
    private $licenseExpireDate;

    /**
     * @var string
     *
     * @ORM\Column(name="business_scope", type="string", length=256, nullable=true)
     */
    private $businessScope;

    /**
     * @var string
     *
     * @ORM\Column(name="organization_no", type="string", length=32, nullable=true)
     */
    private $organizationNo;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=512, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="legal_person", type="string", length=32, nullable=true)
     */
    private $legalPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="cert_no", type="string", length=18, nullable=true)
     */
    private $certNo;

    /**
     * @var string
     *
     * @ORM\Column(name="cert_type", type="string", length=18, nullable=true)
     */
    private $certType;

    /**
     * @var string
     *
     * @ORM\Column(name="legal_person_phone", type="string", length=20, nullable=true)
     */
    private $legalPersonPhone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_code", type="string", length=10, nullable=true)
     */
    private $bankCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_no", type="string", length=50, nullable=true)
     */
    private $bankAccountNo;

    /**
     * @var string
     *
     * @ORM\Column(name="card_type", type="string", length=10, nullable=true)
     */
    private $cardType;

    /**
     * @var string
     *
     * @ORM\Column(name="card_attribute", type="string", length=10, nullable=true)
     */
    private $cardAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=128, nullable=true)
     */
    private $province;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=128, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_branch", type="string", length=255, nullable=true)
     */
    private $bankBranch;

    /**
     * @var string
     *
     * @ORM\Column(name="fileName", type="string", length=32, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="digest", type="string", length=32, nullable=true)
     */
    private $digest;

    /**
     * @var string
     *
     * @ORM\Column(name="digestType", type="string", length=16, nullable=true)
     */
    private $digesttype;

    /**
     * @var string
     *
     * @ORM\Column(name="extend_param", type="string", length=200, nullable=true)
     */
    private $extendParam;

    /**
     * @var string
     *
     * @ORM\Column(name="audit_message", type="string", length=200, nullable=true)
     */
    private $auditMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set uId
     *
     * @param integer $uId
     *
     * @return MemberCompinfo
     */
    public function setUId($uId)
    {
        $this->uId = $uId;

        return $this;
    }

    /**
     * Get uId
     *
     * @return integer
     */
    public function getUId()
    {
        return $this->uId;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return MemberCompinfo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set auditOrderNo
     *
     * @param string $auditOrderNo
     *
     * @return MemberCompinfo
     */
    public function setAuditOrderNo($auditOrderNo)
    {
        $this->auditOrderNo = $auditOrderNo;

        return $this;
    }

    /**
     * Get auditOrderNo
     *
     * @return string
     */
    public function getAuditOrderNo()
    {
        return $this->auditOrderNo;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return MemberCompinfo
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set fixedTelephone
     *
     * @param string $fixedTelephone
     *
     * @return MemberCompinfo
     */
    public function setFixedTelephone($fixedTelephone)
    {
        $this->fixedTelephone = $fixedTelephone;

        return $this;
    }

    /**
     * Get fixedTelephone
     *
     * @return string
     */
    public function getFixedTelephone()
    {
        return $this->fixedTelephone;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return MemberCompinfo
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return MemberCompinfo
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
     * Set email
     *
     * @param string $email
     *
     * @return MemberCompinfo
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return MemberCompinfo
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return MemberCompinfo
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set addressProvince
     *
     * @param string $addressProvince
     *
     * @return MemberCompinfo
     */
    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince = $addressProvince;

        return $this;
    }

    /**
     * Get addressProvince
     *
     * @return string
     */
    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    /**
     * Set addressCity
     *
     * @param string $addressCity
     *
     * @return MemberCompinfo
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    /**
     * Get addressCity
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * Set addressDistrict
     *
     * @param string $addressDistrict
     *
     * @return MemberCompinfo
     */
    public function setAddressDistrict($addressDistrict)
    {
        $this->addressDistrict = $addressDistrict;

        return $this;
    }

    /**
     * Get addressDistrict
     *
     * @return string
     */
    public function getAddressDistrict()
    {
        return $this->addressDistrict;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return MemberCompinfo
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
     * Set licenseNo
     *
     * @param string $licenseNo
     *
     * @return MemberCompinfo
     */
    public function setLicenseNo($licenseNo)
    {
        $this->licenseNo = $licenseNo;

        return $this;
    }

    /**
     * Get licenseNo
     *
     * @return string
     */
    public function getLicenseNo()
    {
        return $this->licenseNo;
    }

    /**
     * Set licenseAddress
     *
     * @param string $licenseAddress
     *
     * @return MemberCompinfo
     */
    public function setLicenseAddress($licenseAddress)
    {
        $this->licenseAddress = $licenseAddress;

        return $this;
    }

    /**
     * Get licenseAddress
     *
     * @return string
     */
    public function getLicenseAddress()
    {
        return $this->licenseAddress;
    }

    /**
     * Set licenseExpireDate
     *
     * @param string $licenseExpireDate
     *
     * @return MemberCompinfo
     */
    public function setLicenseExpireDate($licenseExpireDate)
    {
        $this->licenseExpireDate = $licenseExpireDate;

        return $this;
    }

    /**
     * Get licenseExpireDate
     *
     * @return string
     */
    public function getLicenseExpireDate()
    {
        return $this->licenseExpireDate;
    }

    /**
     * Set businessScope
     *
     * @param string $businessScope
     *
     * @return MemberCompinfo
     */
    public function setBusinessScope($businessScope)
    {
        $this->businessScope = $businessScope;

        return $this;
    }

    /**
     * Get businessScope
     *
     * @return string
     */
    public function getBusinessScope()
    {
        return $this->businessScope;
    }

    /**
     * Set organizationNo
     *
     * @param string $organizationNo
     *
     * @return MemberCompinfo
     */
    public function setOrganizationNo($organizationNo)
    {
        $this->organizationNo = $organizationNo;

        return $this;
    }

    /**
     * Get organizationNo
     *
     * @return string
     */
    public function getOrganizationNo()
    {
        return $this->organizationNo;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return MemberCompinfo
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set legalPerson
     *
     * @param string $legalPerson
     *
     * @return MemberCompinfo
     */
    public function setLegalPerson($legalPerson)
    {
        $this->legalPerson = $legalPerson;

        return $this;
    }

    /**
     * Get legalPerson
     *
     * @return string
     */
    public function getLegalPerson()
    {
        return $this->legalPerson;
    }

    /**
     * Set certNo
     *
     * @param string $certNo
     *
     * @return MemberCompinfo
     */
    public function setCertNo($certNo)
    {
        $this->certNo = $certNo;

        return $this;
    }

    /**
     * Get certNo
     *
     * @return string
     */
    public function getCertNo()
    {
        return $this->certNo;
    }

    /**
     * Set certType
     *
     * @param string $certType
     *
     * @return MemberCompinfo
     */
    public function setCertType($certType)
    {
        $this->certType = $certType;

        return $this;
    }

    /**
     * Get certType
     *
     * @return string
     */
    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * Set legalPersonPhone
     *
     * @param string $legalPersonPhone
     *
     * @return MemberCompinfo
     */
    public function setLegalPersonPhone($legalPersonPhone)
    {
        $this->legalPersonPhone = $legalPersonPhone;

        return $this;
    }

    /**
     * Get legalPersonPhone
     *
     * @return string
     */
    public function getLegalPersonPhone()
    {
        return $this->legalPersonPhone;
    }

    /**
     * Set bankCode
     *
     * @param string $bankCode
     *
     * @return MemberCompinfo
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Get bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Set bankAccountNo
     *
     * @param string $bankAccountNo
     *
     * @return MemberCompinfo
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;

        return $this;
    }

    /**
     * Get bankAccountNo
     *
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * Set cardType
     *
     * @param string $cardType
     *
     * @return MemberCompinfo
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * Get cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Set cardAttribute
     *
     * @param string $cardAttribute
     *
     * @return MemberCompinfo
     */
    public function setCardAttribute($cardAttribute)
    {
        $this->cardAttribute = $cardAttribute;

        return $this;
    }

    /**
     * Get cardAttribute
     *
     * @return string
     */
    public function getCardAttribute()
    {
        return $this->cardAttribute;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return MemberCompinfo
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return MemberCompinfo
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set bankBranch
     *
     * @param string $bankBranch
     *
     * @return MemberCompinfo
     */
    public function setBankBranch($bankBranch)
    {
        $this->bankBranch = $bankBranch;

        return $this;
    }

    /**
     * Get bankBranch
     *
     * @return string
     */
    public function getBankBranch()
    {
        return $this->bankBranch;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return MemberCompinfo
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set digest
     *
     * @param string $digest
     *
     * @return MemberCompinfo
     */
    public function setDigest($digest)
    {
        $this->digest = $digest;

        return $this;
    }

    /**
     * Get digest
     *
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Set digesttype
     *
     * @param string $digesttype
     *
     * @return MemberCompinfo
     */
    public function setDigesttype($digesttype)
    {
        $this->digesttype = $digesttype;

        return $this;
    }

    /**
     * Get digesttype
     *
     * @return string
     */
    public function getDigesttype()
    {
        return $this->digesttype;
    }

    /**
     * Set extendParam
     *
     * @param string $extendParam
     *
     * @return MemberCompinfo
     */
    public function setExtendParam($extendParam)
    {
        $this->extendParam = $extendParam;

        return $this;
    }

    /**
     * Get extendParam
     *
     * @return string
     */
    public function getExtendParam()
    {
        return $this->extendParam;
    }

    /**
     * Set auditMessage
     *
     * @param string $auditMessage
     *
     * @return MemberCompinfo
     */
    public function setAuditMessage($auditMessage)
    {
        $this->auditMessage = $auditMessage;

        return $this;
    }

    /**
     * Get auditMessage
     *
     * @return string
     */
    public function getAuditMessage()
    {
        return $this->auditMessage;
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
