<?php

namespace Hypor\WebService;

class getMessageListResponseContainer
{

    /**
     * @var TypegetMessageListResponse $getMessageListResponse
     */
    protected $getMessageListResponse = null;

    /**
     * @param TypegetMessageListResponse $getMessageListResponse
     */
    public function __construct($getMessageListResponse)
    {
      $this->getMessageListResponse = $getMessageListResponse;
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
     * @return \Hypor\WebService\getMessageListResponseContainer
     */
    public function setGetMessageListResponse($getMessageListResponse)
    {
      $this->getMessageListResponse = $getMessageListResponse;
      return $this;
    }

}
