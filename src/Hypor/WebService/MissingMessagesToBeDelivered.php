<?php

namespace Hypor\WebService;

class MissingMessagesToBeDelivered
{

    /**
     * @var TypeMessageNumber $MessageNumber
     */
    protected $MessageNumber = null;

    /**
     * @param TypeMessageNumber $MessageNumber
     */
    public function __construct($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
    }

    /**
     * @return TypeMessageNumber
     */
    public function getMessageNumber()
    {
      return $this->MessageNumber;
    }

    /**
     * @param TypeMessageNumber $MessageNumber
     * @return \Hypor\WebService\MissingMessagesToBeDelivered
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
      return $this;
    }

}
