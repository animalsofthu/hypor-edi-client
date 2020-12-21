<?php

namespace Hypor\WebService;

class getMessageRequest
{

    /**
     * @var string $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @param string $Authenticationtoken
     * @param string $MessageId
     */
    public function __construct($Authenticationtoken, $MessageId)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      $this->MessageId = $MessageId;
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
     * @return \Hypor\WebService\getMessageRequest
     */
    public function setAuthenticationtoken($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param string $MessageId
     * @return \Hypor\WebService\getMessageRequest
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

}
