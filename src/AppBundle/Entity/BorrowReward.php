<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowReward
 *
 * @ORM\Table(name="borrow_reward")
 * @ORM\Entity
 */
class BorrowReward
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
     * @return BorrowReward
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
     * @return BorrowReward
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
     * @return BorrowReward
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
