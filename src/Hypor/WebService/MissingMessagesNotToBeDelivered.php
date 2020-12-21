<?php

namespace Hypor\WebService;

class MissingMessagesNotToBeDelivered
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
     * @return \Hypor\WebService\MissingMessagesNotToBeDelivered
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
      return $this;
    }

}
