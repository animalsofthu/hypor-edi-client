<?php

namespace Hypor\WebService;

class TypeAnimal
{

    /**
     * @var TypeAdminAnimalNumber $AdminAnimalNumber
     */
    protected $AdminAnimalNumber = null;

    /**
     * @var TypeTattooNumber $TattooNumber
     */
    protected $TattooNumber = null;

    /**
     * @param TypeAdminAnimalNumber $AdminAnimalNumber
     * @param TypeTattooNumber $TattooNumber
     */
    public function __construct($AdminAnimalNumber, $TattooNumber)
    {
      $this->AdminAnimalNumber = $AdminAnimalNumber;
      $this->TattooNumber = $TattooNumber;
    }

    /**
     * @return TypeAdminAnimalNumber
     */
    public function getAdminAnimalNumber()
    {
      return $this->AdminAnimalNumber;
    }

    /**
     * @param TypeAdminAnimalNumber $AdminAnimalNumber
     * @return \Hypor\WebService\TypeAnimal
     */
    public function setAdminAnimalNumber($AdminAnimalNumber)
    {
      $this->AdminAnimalNumber = $AdminAnimalNumber;
      return $this;
    }

    /**
     * @return TypeTattooNumber
     */
    public function getTattooNumber()
    {
      return $this->TattooNumber;
    }

    /**
     * @param TypeTattooNumber $TattooNumber
     * @return \Hypor\WebService\TypeAnimal
     */
    public function setTattooNumber($TattooNumber)
    {
      $this->TattooNumber = $TattooNumber;
      return $this;
    }

}
