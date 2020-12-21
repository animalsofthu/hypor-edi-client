<?php

namespace Hypor\WebService;

class getExchangeStatusRequestContainer
{

    /**
     * @var TypegetExchangeStatusRequest $getExchangeStatusRequest
     */
    protected $getExchangeStatusRequest = null;

    /**
     * @param TypegetExchangeStatusRequest $getExchangeStatusRequest
     */
    public function __construct($getExchangeStatusRequest)
    {
      $this->getExchangeStatusRequest = $getExchangeStatusRequest;
    }

    /**
     * @return TypegetExchangeStatusRequest
     */
    public function getGetExchangeStatusRequest()
    {
      return $this->getExchangeStatusRequest;
    }

    /**
     * @param TypegetExchangeStatusRequest $getExchangeStatusRequest
     * @return \Hypor\WebService\getExchangeStatusRequestContainer
     */
    public function setGetExchangeStatusRequest($getExchangeStatusRequest)
    {
      $this->getExchangeStatusRequest = $getExchangeStatusRequest;
      return $this;
    }

}
