<?php

namespace Hypor\WebService;

class TypeputExchangeStatusAcknowledgementRequest
{

    /**
     * @var TypeAuthenticationtoken $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var TypeExchangeStatus $ExchangeStatus
     */
    protected $ExchangeStatus = null;

    /**
     * @param TypeAuthenticationtoken $Authenticationtoken
     */
    public function __construct($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
    }

    /**
     * @return TypeAuthenticationtoken
     */
    public function getAuthenticationtoken()
    {
      return $this->Authenticationtoken;
    }

    /**
     * @param TypeAuthenticationtoken $Authenticationtoken
     * @return \Hypor\WebService\TypeputExchangeStatusAcknowledgementRequest
     */
    public function setAuthenticationtoken($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
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
     * @return \Hypor\WebService\TypeputExchangeStatusAcknowledgementRequest
     */
    public function setExchangeStatus($ExchangeStatus)
    {
      $this->ExchangeStatus = $ExchangeStatus;
      return $this;
    }

}
