<?php

namespace Hypor\WebService;

class getExchangeStatusRequestContainerResponse
{

    /**
     * @var TypegetExchangeStatusResponse $getExchangeStatusResponse
     */
    protected $getExchangeStatusResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TypegetExchangeStatusResponse
     */
    public function getGetExchangeStatusResponse()
    {
      return $this->getExchangeStatusResponse;
    }

    /**
     * @param TypegetExchangeStatusResponse $getExchangeStatusResponse
     * @return \Hypor\WebService\getExchangeStatusRequestContainerResponse
     */
    public function setGetExchangeStatusResponse($getExchangeStatusResponse)
    {
      $this->getExchangeStatusResponse = $getExchangeStatusResponse;
      return $this;
    }

}
