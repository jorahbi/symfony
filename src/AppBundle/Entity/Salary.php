<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salary
 *
 * @ORM\Table(name="salary")
 * @ORM\Entity
 */
class Salary
{
    /**
     * @var integer
     *
     * @ORM\Column(name="month", type="integer", nullable=false)
     */
    private $month = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=20, nullable=false)
     */
    private $realName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_idcard", type="string", length=30, nullable=false)
     */
    private $userIdcard = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=30, nullable=false)
     */
    private $userPhone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="job_num", type="string", length=20, nullable=false)
     */
    private $jobNum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $money = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="collect_order_no", type="string", length=50, nullable=false)
     */
    private $collectOrderNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pay_order_no", type="string", length=50, nullable=false)
     */
    private $payOrderNo = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set month
     *
     * @param integer $month
     *
     * @return Salary
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return Salary
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return Salary
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * Get realName
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Set userIdcard
     *
     * @param string $userIdcard
     *
     * @return Salary
     */
    public function setUserIdcard($userIdcard)
    {
        $this->userIdcard = $userIdcard;

        return $this;
    }

    /**
     * Get userIdcard
     *
     * @return string
     */
    public function getUserIdcard()
    {
        return $this->userIdcard;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return Salary
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set jobNum
     *
     * @param string $jobNum
     *
     * @return Salary
     */
    public function setJobNum($jobNum)
    {
        $this->jobNum = $jobNum;

        return $this;
    }

    /**
     * Get jobNum
     *
     * @return string
     */
    public function getJobNum()
    {
        return $this->jobNum;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return Salary
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set collectOrderNo
     *
     * @param string $collectOrderNo
     *
     * @return Salary
     */
    public function setCollectOrderNo($collectOrderNo)
    {
        $this->collectOrderNo = $collectOrderNo;

        return $this;
    }

    /**
     * Get collectOrderNo
     *
     * @return string
     */
    public function getCollectOrderNo()
    {
        return $this->collectOrderNo;
    }

    /**
     * Set payOrderNo
     *
     * @param string $payOrderNo
     *
     * @return Salary
     */
    public function setPayOrderNo($payOrderNo)
    {
        $this->payOrderNo = $payOrderNo;

        return $this;
    }

    /**
     * Get payOrderNo
     *
     * @return string
     */
    public function getPayOrderNo()
    {
        return $this->payOrderNo;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Salary
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
     * Set info
     *
     * @param string $info
     *
     * @return Salary
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
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
