<?php

namespace Hypor\WebService;

class getMessageListRequestContainerResponse
{

    /**
     * @var TypegetMessageListResponse $getMessageListResponse
     */
    protected $getMessageListResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TypegetMessageListResponse
     */
    public function getGetMessageListResponse()
    {
      return $this->getMessageListResponse;
    }

    /**
     * @param TypegetMessageListResponse $getMessageListResponse
     * @return \Hypor\WebService\getMessageListRequestContainerResponse
     */
    public function setGetMessageListResponse($getMessageListResponse)
    {
      $this->getMessageListResponse = $getMessageListResponse;
      return $this;
    }

}
