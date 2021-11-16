<?php

namespace Hypor\TestWebService;

class MissingMessages
{

    /**
     * @var int $MessageNumber
     */
    protected $MessageNumber = null;

    /**
     * @param int $MessageNumber
     */
    public function __construct($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
    }

    /**
     * @return int
     */
    public function getMessageNumber()
    {
      return $this->MessageNumber;
    }

    /**
     * @param int $MessageNumber
     * @return \Hypor\TestWebService\MissingMessages
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
      return $this;
    }

}
