<?php

namespace Hypor\TestWebService;

class TypegetExchangeStatusResponse
{

    /**
     * @var TypeStatus $Status
     */
    protected $Status = null;

    /**
     * @var TypeExchangeStatus $ExchangeStatus
     */
    protected $ExchangeStatus = null;

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
     * @return \Hypor\TestWebService\TypegetExchangeStatusResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return TypeExchangeStatus
     */
    public function getExchangeStatus()
    {
      return $this->ExchangeStatus;
    }

    /**
     * @param TypeExchangeStatus $ExchangeStatus
     * @return \Hypor\TestWebService\TypegetExchangeStatusResponse
     */
    public function setExchangeStatus($ExchangeStatus)
    {
      $this->ExchangeStatus = $ExchangeStatus;
      return $this;
    }

}
