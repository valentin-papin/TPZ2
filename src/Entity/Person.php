<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Person
 * @package TP2\Entity
 * @ORM\Entity
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
     * @ORM\Column(type="date")
     */
    protected $created_at;
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    protected $color;
}