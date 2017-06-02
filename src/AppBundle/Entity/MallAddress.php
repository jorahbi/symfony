<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MallAddress
 *
 * @ORM\Table(name="mall_address", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class MallAddress
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=10, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="main_phone", type="string", length=20, nullable=false)
     */
    private $mainPhone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="secondary_phone", type="string", length=20, nullable=false)
     */
    private $secondaryPhone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=false)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="post_code", type="string", length=10, nullable=false)
     */
    private $postCode = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="province", type="smallint", nullable=false)
     */
    private $province = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="city", type="smallint", nullable=false)
     */
    private $city = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="district", type="smallint", nullable=false)
     */
    private $district = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="province_text", type="string", length=100, nullable=false)
     */
    private $provinceText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city_text", type="string", length=100, nullable=false)
     */
    private $cityText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="district_text", type="string", length=100, nullable=false)
     */
    private $districtText = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="default", type="boolean", nullable=false)
     */
    private $default = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return MallAddress
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return MallAddress
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
     * Set mainPhone
     *
     * @param string $mainPhone
     *
     * @return MallAddress
     */
    public function setMainPhone($mainPhone)
    {
        $this->mainPhone = $mainPhone;

        return $this;
    }

    /**
     * Get mainPhone
     *
     * @return string
     */
    public function getMainPhone()
    {
        return $this->mainPhone;
    }

    /**
     * Set secondaryPhone
     *
     * @param string $secondaryPhone
     *
     * @return MallAddress
     */
    public function setSecondaryPhone($secondaryPhone)
    {
        $this->secondaryPhone = $secondaryPhone;

        return $this;
    }

    /**
     * Get secondaryPhone
     *
     * @return string
     */
    public function getSecondaryPhone()
    {
        return $this->secondaryPhone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return MallAddress
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
     * Set postCode
     *
     * @param string $postCode
     *
     * @return MallAddress
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set province
     *
     * @param integer $province
     *
     * @return MallAddress
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return integer
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set city
     *
     * @param integer $city
     *
     * @return MallAddress
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set district
     *
     * @param integer $district
     *
     * @return MallAddress
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return integer
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set provinceText
     *
     * @param string $provinceText
     *
     * @return MallAddress
     */
    public function setProvinceText($provinceText)
    {
        $this->provinceText = $provinceText;

        return $this;
    }

    /**
     * Get provinceText
     *
     * @return string
     */
    public function getProvinceText()
    {
        return $this->provinceText;
    }

    /**
     * Set cityText
     *
     * @param string $cityText
     *
     * @return MallAddress
     */
    public function setCityText($cityText)
    {
        $this->cityText = $cityText;

        return $this;
    }

    /**
     * Get cityText
     *
     * @return string
     */
    public function getCityText()
    {
        return $this->cityText;
    }

    /**
     * Set districtText
     *
     * @param string $districtText
     *
     * @return MallAddress
     */
    public function setDistrictText($districtText)
    {
        $this->districtText = $districtText;

        return $this;
    }

    /**
     * Get districtText
     *
     * @return string
     */
    public function getDistrictText()
    {
        return $this->districtText;
    }

    /**
     * Set default
     *
     * @param boolean $default
     *
     * @return MallAddress
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return boolean
     */
    public function getDefault()
    {
        return $this->default;
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
