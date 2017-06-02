<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowTab
 *
 * @ORM\Table(name="borrow_tab")
 * @ORM\Entity
 */
class BorrowTab
{
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

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
     * @ORM\Column(name="tab_type", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabType;



    /**
     * Set content
     *
     * @param string $content
     *
     * @return BorrowTab
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return BorrowTab
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
     * Set tabType
     *
     * @param boolean $tabType
     *
     * @return BorrowTab
     */
    public function setTabType($tabType)
    {
        $this->tabType = $tabType;

        return $this;
    }

    /**
     * Get tabType
     *
     * @return boolean
     */
    public function getTabType()
    {
        return $this->tabType;
    }
}
