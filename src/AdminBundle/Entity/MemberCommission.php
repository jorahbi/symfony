<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberCommission
 *
 * @ORM\Table(name="member_commission", uniqueConstraints={@ORM\UniqueConstraint(name="utype", columns={"uid", "ctype", "friend_id"})})
 * @ORM\Entity
 */
class MemberCommission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="friend_id", type="integer", nullable=true)
     */
    private $friendId;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $commission;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ctype", type="boolean", nullable=true)
     */
    private $ctype = '1';

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
     * @return MemberCommission
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
     * Set friendId
     *
     * @param integer $friendId
     *
     * @return MemberCommission
     */
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;

        return $this;
    }

    /**
     * Get friendId
     *
     * @return integer
     */
    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     * Set commission
     *
     * @param string $commission
     *
     * @return MemberCommission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set ctype
     *
     * @param boolean $ctype
     *
     * @return MemberCommission
     */
    public function setCtype($ctype)
    {
        $this->ctype = $ctype;

        return $this;
    }

    /**
     * Get ctype
     *
     * @return boolean
     */
    public function getCtype()
    {
        return $this->ctype;
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
