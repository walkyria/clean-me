<?php

namespace cleanMe\Controller;

/* */
use cleanMe\Repository\PropertyRepository;

class PropertyController
{
    /**
     * @var PropertyRepository
     */
    protected $propertyRepository;

    public function __construct(PropertyRepository $propertyRepository) //dependency injection to make code testable.
    {
        $this->propertyRepository = $propertyRepository;
    }

    public function displayProperties()
    {

        $properties = $this->getProperties(true);

        foreach ($properties as $property) {
            echo $property[1] . ", sleeps $property[2] <br />";
        }
    }

}