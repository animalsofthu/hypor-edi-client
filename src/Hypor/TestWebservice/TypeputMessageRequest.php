<?php

namespace Hypor\TestWebService;

class TypeputMessageRequest
{

    /**
     * @var string $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var typeEdiMessage $EdiMessage
     */
    protected $EdiMessage = null;

    /**
     * @param string $Authenticationtoken
     * @param typeEdiMessage $EdiMessage
     */
    public function __construct($Authenticationtoken, $EdiMessage)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      $this->EdiMessage = $EdiMessage;
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
     * @return \Hypor\TestWebService\TypeputMessageRequest
     */
    public function setAuthenticationtoken($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      return $this;
    }

    /**
     * @return typeEdiMessage
     */
    public function getEdiMessage()
    {
      return $this->EdiMessage;
    }

    /**
     * @param typeEdiMessage $EdiMessage
     * @return \Hypor\TestWebService\TypeputMessageRequest
     */
    public function setEdiMessage($EdiMessage)
    {
      $this->EdiMessage = $EdiMessage;
      return $this;
    }

}
