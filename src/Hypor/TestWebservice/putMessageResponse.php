<?php

namespace Hypor\TestWebService;

class putMessageResponse
{

    /**
     * @var TypeStatus $Status
     */
    protected $Status = null;

    /**
     * @param TypeStatus $Status
     */
    public function __construct($Status)
    {
      $this->Status = $Status;
    }

    /**
     * @return TypeStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param TypeStatus $Status
     * @return \Hypor\TestWebService\putMessageResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
