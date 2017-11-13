<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Person
 * @package TP2\Entity
 * @ORM\Entity
 * @ORM\Table(name="valentin_personnes")
 */
class Person
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    protected $name;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $age;
    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    protected $visible;
    /**
     * @var string
     * @ORM\Column(type="date", name="created_at")
     */
    protected $createdAt;
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    protected $color;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return boolean
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @param boolean $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


}