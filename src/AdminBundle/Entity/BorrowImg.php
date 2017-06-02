<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowImg
 *
 * @ORM\Table(name="borrow_img")
 * @ORM\Entity
 */
class BorrowImg
{
    /**
     * @var string
     *
     * @ORM\Column(name="images", type="text", length=65535, nullable=false)
     */
    private $images;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bid;

    /**
     * @var string
     *
     * @ORM\Column(name="img_type", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $imgType;



    /**
     * Set images
     *
     * @param string $images
     *
     * @return BorrowImg
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return BorrowImg
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
     * Set imgType
     *
     * @param string $imgType
     *
     * @return BorrowImg
     */
    public function setImgType($imgType)
    {
        $this->imgType = $imgType;

        return $this;
    }

    /**
     * Get imgType
     *
     * @return string
     */
    public function getImgType()
    {
        return $this->imgType;
    }
}
