<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowFee
 *
 * @ORM\Table(name="borrow_fee")
 * @ORM\Entity
 */
class BorrowFee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rule", type="integer", nullable=false)
     */
    private $rule = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;



    /**
     * Set rule
     *
     * @param integer $rule
     *
     * @return BorrowFee
     */
    public function setRule($rule)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * Get rule
     *
     * @return integer
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return BorrowFee
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return BorrowFee
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
}
