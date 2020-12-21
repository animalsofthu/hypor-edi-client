<?php

namespace Hypor\WebService;

class putMessageResponseContainer
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
     * @return \Hypor\WebService\putMessageResponseContainer
     */
    public function setPutMessageResponse($putMessageResponse)
    {
      $this->putMessageResponse = $putMessageResponse;
      return $this;
    }

}
