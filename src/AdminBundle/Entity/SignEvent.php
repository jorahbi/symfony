<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SignEvent
 *
 * @ORM\Table(name="sign_event")
 * @ORM\Entity
 */
class SignEvent
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
     * @ORM\Column(name="event_type", type="boolean", nullable=false)
     */
    private $eventType = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="event_case", type="boolean", nullable=false)
     */
    private $eventCase = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="event_prize", type="boolean", nullable=false)
     */
    private $eventPrize = '0';

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
     * @return SignEvent
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
     * Set eventType
     *
     * @param boolean $eventType
     *
     * @return SignEvent
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return boolean
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set eventCase
     *
     * @param boolean $eventCase
     *
     * @return SignEvent
     */
    public function setEventCase($eventCase)
    {
        $this->eventCase = $eventCase;

        return $this;
    }

    /**
     * Get eventCase
     *
     * @return boolean
     */
    public function getEventCase()
    {
        return $this->eventCase;
    }

    /**
     * Set eventPrize
     *
     * @param boolean $eventPrize
     *
     * @return SignEvent
     */
    public function setEventPrize($eventPrize)
    {
        $this->eventPrize = $eventPrize;

        return $this;
    }

    /**
     * Get eventPrize
     *
     * @return boolean
     */
    public function getEventPrize()
    {
        return $this->eventPrize;
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
