<?php

namespace Hypor\WebService;

class getMessageListRequestContainer
{

    /**
     * @var TypegetMessageListRequest $getMessageListRequest
     */
    protected $getMessageListRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TypegetMessageListRequest
     */
    public function getGetMessageListRequest()
    {
      return $this->getMessageListRequest;
    }

    /**
     * @param TypegetMessageListRequest $getMessageListRequest
     * @return \Hypor\WebService\getMessageListRequestContainer
     */
    public function setGetMessageListRequest($getMessageListRequest)
    {
      $this->getMessageListRequest = $getMessageListRequest;
      return $this;
    }

}
