<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReceiptActivity
 *
 * @ORM\Table(name="receipt_activity")
 * @ORM\Entity
 */
class ReceiptActivity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_id", type="integer", nullable=false)
     */
    private $prizeId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="addtime", type="integer", nullable=true)
     */
    private $addtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_id", type="integer", nullable=true)
     */
    private $investId;

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
     * @return ReceiptActivity
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
     * Set prizeId
     *
     * @param integer $prizeId
     *
     * @return ReceiptActivity
     */
    public function setPrizeId($prizeId)
    {
        $this->prizeId = $prizeId;

        return $this;
    }

    /**
     * Get prizeId
     *
     * @return integer
     */
    public function getPrizeId()
    {
        return $this->prizeId;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     *
     * @return ReceiptActivity
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return ReceiptActivity
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set investId
     *
     * @param integer $investId
     *
     * @return ReceiptActivity
     */
    public function setInvestId($investId)
    {
        $this->investId = $investId;

        return $this;
    }

    /**
     * Get investId
     *
     * @return integer
     */
    public function getInvestId()
    {
        return $this->investId;
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
