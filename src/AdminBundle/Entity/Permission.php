<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Permission
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE", region="persission_entity_region") 
 * @ORM\Table(name="permission")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PermissionRepository")
 */
class Permission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message = "label 不能为空")
     * @ORM\Column(name="label", type="string", length=45, nullable=false)
     */
    private $label;

    /**
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     * @ORM\OneToMany(targetEntity="permission", mappedBy="parent", cascade={"persist"})
     */
    private $children;


    /**
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     * @ORM\ManyToOne(targetEntity="Permission", inversedBy="children", cascade={"persist"})
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=20, nullable=false)
     */
    private $path = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=45, nullable=true)
     */
    private $icon = '';

     /**
     * @var string
     *
     * @ORM\Column(name="lv", type="integer", nullable=false)
     */
    private $lv = 1;

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
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set lv
     *
     * @param integer $lv
     *
     * @return Permission
     */
    public function setLv($lv)
    {
        $this->lv = $lv;

        return $this;
    }

    /**
     * Get lv
     *
     * @return integer
     */
    public function getLv()
    {
        return $this->lv;
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

    /**
     * Add child
     *
     * @param \AdminBundle\Entity\permission $child
     *
     * @return Permission
     */
    public function addChild(\AdminBundle\Entity\permission $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AdminBundle\Entity\permission $child
     */
    public function removeChild(\AdminBundle\Entity\permission $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \AdminBundle\Entity\Permission $parent
     *
     * @return Permission
     */
    public function setParent(\AdminBundle\Entity\Permission $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AdminBundle\Entity\Permission
     */
    public function getParent()
    {
        return $this->parent;
    }
}
