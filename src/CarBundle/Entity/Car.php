<?php

namespace CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="CarBundle\Repository\CarRepository")
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Model
     *
     * @ORM\ManyToOne(targetEntity="CarBundle\Entity\Model", inversedBy="cars")
     */
    private $model;

    /**
     * @var Make
     *
     * @ORM\ManyToOne(targetEntity="CarBundle\Entity\Make", inversedBy="cars")
     */
    private $make;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", scale=2)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var boolean
     *
     * @ORM\Column(name="navigation", type="boolean")
     */
    private $navigation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promote", type="boolean")
     */
    private $promote;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Car
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set navigation
     *
     * @param boolean $navigation
     *
     * @return Car
     */
    public function setNavigation($navigation)
    {
        $this->navigation = $navigation;

        return $this;
    }

    /**
     * Get navigation
     *
     * @return boolean
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * Set model
     *
     * @param \CarBundle\Entity\Model $model
     *
     * @return Car
     */
    public function setModel(\CarBundle\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \CarBundle\Entity\Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set make
     *
     * @param \CarBundle\Entity\Make $make
     *
     * @return Car
     */
    public function setMake(\CarBundle\Entity\Make $make = null)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return \CarBundle\Entity\Make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set promote
     *
     * @param boolean $promote
     *
     * @return Car
     */
    public function setPromote($promote)
    {
        $this->promote = $promote;

        return $this;
    }

    /**
     * Get promote
     *
     * @return boolean
     */
    public function getPromote()
    {
        return $this->promote;
    }
}
