<?php

namespace Hypor\WebService;

class getMessageRequestContainer
{

    /**
     * @var getMessageRequest $getMessageRequest
     */
    protected $getMessageRequest = null;

    /**
     * @param getMessageRequest $getMessageRequest
     */
    public function __construct($getMessageRequest)
    {
      $this->getMessageRequest = $getMessageRequest;
    }

    /**
     * @return getMessageRequest
     */
    public function getGetMessageRequest()
    {
      return $this->getMessageRequest;
    }

    /**
     * @param getMessageRequest $getMessageRequest
     * @return \Hypor\WebService\getMessageRequestContainer
     */
    public function setGetMessageRequest($getMessageRequest)
    {
      $this->getMessageRequest = $getMessageRequest;
      return $this;
    }

}
