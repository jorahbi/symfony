<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * cat
 *
 * @ORM\Table(name="cat")
 * @ORM\Entity
 */
class Cat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=45, nullable=false)
     */
    private $label;


    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=20, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=45, nullable=true)
     */
    private $icon = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=45, nullable=true)
     */
    private $link = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_menu", type="boolean", nullable=false)
     */
    private $isMenu = '1';

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

     /**
     * Get id
     *
     * @return integer
     */
    public function setId($id)
    {
        return $this->id = $id;
        return $this;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Permission
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Permission
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Permission
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Permission
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
     * Set link
     *
     * @param string $link
     *
     * @return Permission
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set isMenu
     *
     * @param boolean $isMenu
     *
     * @return Permission
     */
    public function setIsMenu($isMenu)
    {
        $this->isMenu = $isMenu;

        return $this;
    }

    /**
     * Get isMenu
     *
     * @return boolean
     */
    public function getIsMenu()
    {
        return $this->isMenu;
    }


    public function __clon()
    {
        $this->setParent('0');
        $this->setLabel('');
        $this->setPath('');
        $this->setIcon('');
        $this->setStatus('1');
        $this->setLink('');
        $this->setIsMenu('1');
    }
}
