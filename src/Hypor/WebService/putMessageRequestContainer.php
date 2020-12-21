<?php

namespace Hypor\WebService;

class putMessageRequestContainer
{

    /**
     * @var putMessageRequest $putMessageRequest
     */
    protected $putMessageRequest = null;

    /**
     * @param putMessageRequest $putMessageRequest
     */
    public function __construct($putMessageRequest)
    {
      $this->putMessageRequest = $putMessageRequest;
    }

    /**
     * @return putMessageRequest
     */
    public function getPutMessageRequest()
    {
      return $this->putMessageRequest;
    }

    /**
     * @param putMessageRequest $putMessageRequest
     * @return \Hypor\WebService\putMessageRequestContainer
     */
    public function setPutMessageRequest($putMessageRequest)
    {
      $this->putMessageRequest = $putMessageRequest;
      return $this;
    }

}
