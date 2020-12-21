<?php

namespace Hypor\WebService;

class TypeputExchangeStatusAcknowledgementRequest
{

    /**
     * @var string $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var TypeExchangeStatus $ExchangeStatus
     */
    protected $ExchangeStatus = null;

    /**
     * @param string $Authenticationtoken
     */
    public function __construct($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
    }

    /**
     * @return string
     */
    public function getAuthenticationtoken()
    {
      return $this->Authenticationtoken;
    }

    /**
     * @param string $Authenticationtoken
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
