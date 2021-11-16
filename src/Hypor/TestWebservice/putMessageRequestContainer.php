<?php

namespace Hypor\TestWebService;

class putMessageRequestContainer
{

    /**
     * @var TypeputMessageRequest $putMessageRequest
     */
    protected $putMessageRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TypeputMessageRequest
     */
    public function getPutMessageRequest()
    {
      return $this->putMessageRequest;
    }

    /**
     * @param TypeputMessageRequest $putMessageRequest
     * @return \Hypor\TestWebService\putMessageRequestContainer
     */
    public function setPutMessageRequest($putMessageRequest)
    {
      $this->putMessageRequest = $putMessageRequest;
      return $this;
    }

}
