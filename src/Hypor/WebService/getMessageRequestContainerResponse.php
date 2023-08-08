<?php

namespace Hypor\WebService;

class getMessageRequestContainerResponse
{

    /**
     * @var getMessageResponse $getMessageResponse
     */
    protected $getMessageResponse = null;

    /**
     * @param getMessageResponse $getMessageResponse
     */
    public function __construct($getMessageResponse)
    {
      $this->getMessageResponse = $getMessageResponse;
    }

    /**
     * @return getMessageResponse
     */
    public function getGetMessageResponse()
    {
      return $this->getMessageResponse;
    }

    /**
     * @param getMessageResponse $getMessageResponse
     * @return \Hypor\WebService\getMessageRequestContainerResponse
     */
    public function setGetMessageResponse($getMessageResponse)
    {
      $this->getMessageResponse = $getMessageResponse;
      return $this;
    }

}
