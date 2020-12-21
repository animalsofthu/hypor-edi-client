<?php

namespace Hypor\WebService;

class getExchangeStatusResponseContainer
{

    /**
     * @var TypegetExchangeStatusResponse $getExchangeStatusResponse
     */
    protected $getExchangeStatusResponse = null;

    /**
     * @param TypegetExchangeStatusResponse $getExchangeStatusResponse
     */
    public function __construct($getExchangeStatusResponse)
    {
      $this->getExchangeStatusResponse = $getExchangeStatusResponse;
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
     * @return \Hypor\WebService\getExchangeStatusResponseContainer
     */
    public function setGetExchangeStatusResponse($getExchangeStatusResponse)
    {
      $this->getExchangeStatusResponse = $getExchangeStatusResponse;
      return $this;
    }

}
