<?php

namespace cleanMe\Controller;


use cleanMe\Repository\PropertyRepository;
use cleanMe\View\PropertyView;

class PropertyController
{
    /**
     * @var PropertyRepository
     */
    protected $propertyRepository;

    /**
     * @var PropertyView
     */
    protected $propertyView;

    public function __construct(
        PropertyRepository $propertyRepository,
        PropertyView $propertyView
    ) {
        $this->propertyRepository = $propertyRepository;
        $this->propertyView       = $propertyView;
    }

    public function getProperties()
    {
        $properties = $this->propertyRepository->getProperties();
        $this->propertyView->displayProperties($properties);
    }

}