<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfflineInvest
 *
 * @ORM\Table(name="offline_invest")
 * @ORM\Entity
 */
class OfflineInvest
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
     * @ORM\Column(name="capital", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $capital = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="borrow_name", type="string", length=100, nullable=false)
     */
    private $borrowName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=20, nullable=false)
     */
    private $duration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $rate = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="repay_type", type="string", length=20, nullable=false)
     */
    private $repayType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="keep_fee", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $keepFee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_card_no", type="string", length=100, nullable=false)
     */
    private $bankCardNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=50, nullable=false)
     */
    private $bankName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_sub_name", type="string", length=50, nullable=false)
     */
    private $bankSubName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="full_time", type="integer", nullable=false)
     */
    private $fullTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadline", type="integer", nullable=false)
     */
    private $deadline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadmonth", type="integer", nullable=false)
     */
    private $deadmonth = '0';

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
     * @var string
     *
     * @ORM\Column(name="invest_img", type="string", length=255, nullable=false)
     */
    private $investImg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pact_img", type="text", length=65535, nullable=true)
     */
    private $pactImg;

    /**
     * @var string
     *
     * @ORM\Column(name="pact_img_v", type="text", length=65535, nullable=true)
     */
    private $pactImgV;

    /**
     * @var string
     *
     * @ORM\Column(name="pact_pdf", type="string", length=255, nullable=false)
     */
    private $pactPdf = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contect_email", type="string", length=255, nullable=false)
     */
    private $contectEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contect_phone", type="string", length=255, nullable=false)
     */
    private $contectPhone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contect_receiver", type="string", length=255, nullable=false)
     */
    private $contectReceiver = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contect_addr", type="string", length=255, nullable=false)
     */
    private $contectAddr = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="collection", type="boolean", nullable=false)
     */
    private $collection = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="agreement_no", type="string", length=20, nullable=false)
     */
    private $agreementNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="t_time", type="integer", nullable=false)
     */
    private $tTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

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
     * @return OfflineInvest
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
     * Set capital
     *
     * @param string $capital
     *
     * @return OfflineInvest
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set borrowName
     *
     * @param string $borrowName
     *
     * @return OfflineInvest
     */
    public function setBorrowName($borrowName)
    {
        $this->borrowName = $borrowName;

        return $this;
    }

    /**
     * Get borrowName
     *
     * @return string
     */
    public function getBorrowName()
    {
        return $this->borrowName;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return OfflineInvest
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
     * @return OfflineInvest
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
     * Set repayType
     *
     * @param string $repayType
     *
     * @return OfflineInvest
     */
    public function setRepayType($repayType)
    {
        $this->repayType = $repayType;

        return $this;
    }

    /**
     * Get repayType
     *
     * @return string
     */
    public function getRepayType()
    {
        return $this->repayType;
    }

    /**
     * Set keepFee
     *
     * @param string $keepFee
     *
     * @return OfflineInvest
     */
    public function setKeepFee($keepFee)
    {
        $this->keepFee = $keepFee;

        return $this;
    }

    /**
     * Get keepFee
     *
     * @return string
     */
    public function getKeepFee()
    {
        return $this->keepFee;
    }

    /**
     * Set bankCardNo
     *
     * @param string $bankCardNo
     *
     * @return OfflineInvest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;

        return $this;
    }

    /**
     * Get bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     *
     * @return OfflineInvest
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set bankSubName
     *
     * @param string $bankSubName
     *
     * @return OfflineInvest
     */
    public function setBankSubName($bankSubName)
    {
        $this->bankSubName = $bankSubName;

        return $this;
    }

    /**
     * Get bankSubName
     *
     * @return string
     */
    public function getBankSubName()
    {
        return $this->bankSubName;
    }

    /**
     * Set fullTime
     *
     * @param integer $fullTime
     *
     * @return OfflineInvest
     */
    public function setFullTime($fullTime)
    {
        $this->fullTime = $fullTime;

        return $this;
    }

    /**
     * Get fullTime
     *
     * @return integer
     */
    public function getFullTime()
    {
        return $this->fullTime;
    }

    /**
     * Set deadline
     *
     * @param integer $deadline
     *
     * @return OfflineInvest
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return integer
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set deadmonth
     *
     * @param integer $deadmonth
     *
     * @return OfflineInvest
     */
    public function setDeadmonth($deadmonth)
    {
        $this->deadmonth = $deadmonth;

        return $this;
    }

    /**
     * Get deadmonth
     *
     * @return integer
     */
    public function getDeadmonth()
    {
        return $this->deadmonth;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return OfflineInvest
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
     * @return OfflineInvest
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
     * Set investImg
     *
     * @param string $investImg
     *
     * @return OfflineInvest
     */
    public function setInvestImg($investImg)
    {
        $this->investImg = $investImg;

        return $this;
    }

    /**
     * Get investImg
     *
     * @return string
     */
    public function getInvestImg()
    {
        return $this->investImg;
    }

    /**
     * Set pactImg
     *
     * @param string $pactImg
     *
     * @return OfflineInvest
     */
    public function setPactImg($pactImg)
    {
        $this->pactImg = $pactImg;

        return $this;
    }

    /**
     * Get pactImg
     *
     * @return string
     */
    public function getPactImg()
    {
        return $this->pactImg;
    }

    /**
     * Set pactImgV
     *
     * @param string $pactImgV
     *
     * @return OfflineInvest
     */
    public function setPactImgV($pactImgV)
    {
        $this->pactImgV = $pactImgV;

        return $this;
    }

    /**
     * Get pactImgV
     *
     * @return string
     */
    public function getPactImgV()
    {
        return $this->pactImgV;
    }

    /**
     * Set pactPdf
     *
     * @param string $pactPdf
     *
     * @return OfflineInvest
     */
    public function setPactPdf($pactPdf)
    {
        $this->pactPdf = $pactPdf;

        return $this;
    }

    /**
     * Get pactPdf
     *
     * @return string
     */
    public function getPactPdf()
    {
        return $this->pactPdf;
    }

    /**
     * Set contectEmail
     *
     * @param string $contectEmail
     *
     * @return OfflineInvest
     */
    public function setContectEmail($contectEmail)
    {
        $this->contectEmail = $contectEmail;

        return $this;
    }

    /**
     * Get contectEmail
     *
     * @return string
     */
    public function getContectEmail()
    {
        return $this->contectEmail;
    }

    /**
     * Set contectPhone
     *
     * @param string $contectPhone
     *
     * @return OfflineInvest
     */
    public function setContectPhone($contectPhone)
    {
        $this->contectPhone = $contectPhone;

        return $this;
    }

    /**
     * Get contectPhone
     *
     * @return string
     */
    public function getContectPhone()
    {
        return $this->contectPhone;
    }

    /**
     * Set contectReceiver
     *
     * @param string $contectReceiver
     *
     * @return OfflineInvest
     */
    public function setContectReceiver($contectReceiver)
    {
        $this->contectReceiver = $contectReceiver;

        return $this;
    }

    /**
     * Get contectReceiver
     *
     * @return string
     */
    public function getContectReceiver()
    {
        return $this->contectReceiver;
    }

    /**
     * Set contectAddr
     *
     * @param string $contectAddr
     *
     * @return OfflineInvest
     */
    public function setContectAddr($contectAddr)
    {
        $this->contectAddr = $contectAddr;

        return $this;
    }

    /**
     * Get contectAddr
     *
     * @return string
     */
    public function getContectAddr()
    {
        return $this->contectAddr;
    }

    /**
     * Set collection
     *
     * @param boolean $collection
     *
     * @return OfflineInvest
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;

        return $this;
    }

    /**
     * Get collection
     *
     * @return boolean
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Set agreementNo
     *
     * @param string $agreementNo
     *
     * @return OfflineInvest
     */
    public function setAgreementNo($agreementNo)
    {
        $this->agreementNo = $agreementNo;

        return $this;
    }

    /**
     * Get agreementNo
     *
     * @return string
     */
    public function getAgreementNo()
    {
        return $this->agreementNo;
    }

    /**
     * Set tTime
     *
     * @param integer $tTime
     *
     * @return OfflineInvest
     */
    public function setTTime($tTime)
    {
        $this->tTime = $tTime;

        return $this;
    }

    /**
     * Get tTime
     *
     * @return integer
     */
    public function getTTime()
    {
        return $this->tTime;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return OfflineInvest
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->addTime;
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
