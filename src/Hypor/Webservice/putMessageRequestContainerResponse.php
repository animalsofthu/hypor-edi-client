<?php

namespace Hypor\WebService;

class putMessageRequestContainerResponse
{

    /**
     * @var putMessageResponse $putMessageResponse
     */
    protected $putMessageResponse = null;

    /**
     * @param putMessageResponse $putMessageResponse
     */
    public function __construct($putMessageResponse)
    {
      $this->putMessageResponse = $putMessageResponse;
    }

    /**
     * @return putMessageResponse
     */
    public function getPutMessageResponse()
    {
      return $this->putMessageResponse;
    }

    /**
     * @param putMessageResponse $putMessageResponse
     * @return \Hypor\WebService\putMessageRequestContainerResponse
     */
    public function setPutMessageResponse($putMessageResponse)
    {
      $this->putMessageResponse = $putMessageResponse;
      return $this;
    }

}
