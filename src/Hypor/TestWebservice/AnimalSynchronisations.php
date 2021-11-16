<?php

namespace Hypor\TestWebService;

class AnimalSynchronisations
{

    /**
     * @var TypeAnimal $Animal
     */
    protected $Animal = null;

    /**
     * @param TypeAnimal $Animal
     */
    public function __construct($Animal)
    {
      $this->Animal = $Animal;
    }

    /**
     * @return TypeAnimal
     */
    public function getAnimal()
    {
      return $this->Animal;
    }

    /**
     * @param TypeAnimal $Animal
     * @return \Hypor\TestWebService\AnimalSynchronisations
     */
    public function setAnimal($Animal)
    {
      $this->Animal = $Animal;
      return $this;
    }

}
