<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppleTree
 *
 * @ORM\Table(name="apple_tree")
 * @ORM\Entity
 */
class AppleTree
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
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="core", type="integer", nullable=false)
     */
    private $core = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="water", type="integer", nullable=false)
     */
    private $water = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tree", type="integer", nullable=false)
     */
    private $tree = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num = '0';

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
     * @return AppleTree
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
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return AppleTree
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
     * Set type
     *
     * @param integer $type
     *
     * @return AppleTree
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set core
     *
     * @param integer $core
     *
     * @return AppleTree
     */
    public function setCore($core)
    {
        $this->core = $core;

        return $this;
    }

    /**
     * Get core
     *
     * @return integer
     */
    public function getCore()
    {
        return $this->core;
    }

    /**
     * Set water
     *
     * @param integer $water
     *
     * @return AppleTree
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get water
     *
     * @return integer
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set tree
     *
     * @param integer $tree
     *
     * @return AppleTree
     */
    public function setTree($tree)
    {
        $this->tree = $tree;

        return $this;
    }

    /**
     * Get tree
     *
     * @return integer
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * Set num
     *
     * @param integer $num
     *
     * @return AppleTree
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
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
