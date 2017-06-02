<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QudaoRedSet
 *
 * @ORM\Table(name="qudao_red_set", uniqueConstraints={@ORM\UniqueConstraint(name="key", columns={"key"})})
 * @ORM\Entity
 */
class QudaoRedSet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="key", type="integer", nullable=true)
     */
    private $key = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="send", type="boolean", nullable=true)
     */
    private $send = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set key
     *
     * @param integer $key
     *
     * @return QudaoRedSet
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return integer
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set send
     *
     * @param boolean $send
     *
     * @return QudaoRedSet
     */
    public function setSend($send)
    {
        $this->send = $send;

        return $this;
    }

    /**
     * Get send
     *
     * @return boolean
     */
    public function getSend()
    {
        return $this->send;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return QudaoRedSet
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
