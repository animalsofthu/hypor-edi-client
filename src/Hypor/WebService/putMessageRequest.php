<?php

namespace Hypor\WebService;

class putMessageRequest
{

    /**
     * @var TypeAuthenticationtoken $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var EdiMessage $EdiMessage
     */
    protected $EdiMessage = null;

    /**
     * @param TypeAuthenticationtoken $Authenticationtoken
     * @param EdiMessage $EdiMessage
     */
    public function __construct($Authenticationtoken, $EdiMessage)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      $this->EdiMessage = $EdiMessage;
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
     * @return \Hypor\WebService\putMessageRequest
     */
    public function setAuthenticationtoken($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      return $this;
    }

    /**
     * @return EdiMessage
     */
    public function getEdiMessage()
    {
      return $this->EdiMessage;
    }

    /**
     * @param EdiMessage $EdiMessage
     * @return \Hypor\WebService\putMessageRequest
     */
    public function setEdiMessage($EdiMessage)
    {
      $this->EdiMessage = $EdiMessage;
      return $this;
    }

}
