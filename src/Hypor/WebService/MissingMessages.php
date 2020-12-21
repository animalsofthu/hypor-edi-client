<?php

namespace Hypor\WebService;

class MissingMessages
{

    /**
     * @var string $MessageNumber
     */
    protected $MessageNumber = null;

    /**
     * @param string $MessageNumber
     */
    public function __construct($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
    }

    /**
     * @return string
     */
    public function getMessageNumber()
    {
      return $this->MessageNumber;
    }

    /**
     * @param string $MessageNumber
     * @return \Hypor\WebService\MissingMessages
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
      return $this;
    }

}
