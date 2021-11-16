<?php

namespace Hypor\TestWebService;

class getExchangeStatusRequestContainer
{

    /**
     * @var TypegetExchangeStatusRequest $getExchangeStatusRequest
     */
    protected $getExchangeStatusRequest = null;

    
    public function __construct()
    {
    
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
     * @return \Hypor\TestWebService\getExchangeStatusRequestContainer
     */
    public function setGetExchangeStatusRequest($getExchangeStatusRequest)
    {
      $this->getExchangeStatusRequest = $getExchangeStatusRequest;
      return $this;
    }

}
