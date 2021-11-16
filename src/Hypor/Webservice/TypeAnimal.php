<?php

namespace Hypor\WebService;

class TypeAnimal
{

    /**
     * @var int $AdminAnimalNumber
     */
    protected $AdminAnimalNumber = null;

    /**
     * @var string $TattooNumber
     */
    protected $TattooNumber = null;

    /**
     * @param int $AdminAnimalNumber
     * @param string $TattooNumber
     */
    public function __construct($AdminAnimalNumber, $TattooNumber)
    {
      $this->AdminAnimalNumber = $AdminAnimalNumber;
      $this->TattooNumber = $TattooNumber;
    }

    /**
     * @return int
     */
    public function getAdminAnimalNumber()
    {
      return $this->AdminAnimalNumber;
    }

    /**
     * @param int $AdminAnimalNumber
     * @return \Hypor\WebService\TypeAnimal
     */
    public function setAdminAnimalNumber($AdminAnimalNumber)
    {
      $this->AdminAnimalNumber = $AdminAnimalNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTattooNumber()
    {
      return $this->TattooNumber;
    }

    /**
     * @param string $TattooNumber
     * @return \Hypor\WebService\TypeAnimal
     */
    public function setTattooNumber($TattooNumber)
    {
      $this->TattooNumber = $TattooNumber;
      return $this;
    }

}
