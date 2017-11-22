<?php
/**
 * Created by PhpStorm.
 * User: walkyria
 * Date: 21/11/17
 * Time: 21:05
 */

namespace cleanMe\Model;


class Property
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var int
     */
    protected $capacity;

    /**
     * @var string
     */
    protected $town;

    /**
     * @var boolean
     */
    protected $smoking;

    /**
     * @var boolean
     */
    protected $pets;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return bool
     */
    public function getSmoking()
    {
        return $this->smoking;
    }

    /**
     * @param bool $smoking
     */
    public function setSmoking($smoking)
    {
        $this->smoking = $smoking;
    }

    /**
     * @return bool
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * @param bool $pets
     */
    public function setPets($pets)
    {
        $this->pets = $pets;
    }


}