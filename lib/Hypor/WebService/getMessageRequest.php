<?php

namespace Hypor\WebService;

class getMessageRequest
{

    /**
     * @var TypeAuthenticationtoken $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var TypeMessageId $MessageId
     */
    protected $MessageId = null;

    /**
     * @param TypeAuthenticationtoken $Authenticationtoken
     * @param TypeMessageId $MessageId
     */
    public function __construct($Authenticationtoken, $MessageId)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      $this->MessageId = $MessageId;
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
     * @return \Hypor\WebService\getMessageRequest
     */
    public function setAuthenticationtoken($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      return $this;
    }

    /**
     * @return TypeMessageId
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param TypeMessageId $MessageId
     * @return \Hypor\WebService\getMessageRequest
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

}
