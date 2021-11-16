<?php

namespace Hypor\WebService;

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
     * @return \Hypor\WebService\putMessageRequestContainer
     */
    public function setPutMessageRequest($putMessageRequest)
    {
      $this->putMessageRequest = $putMessageRequest;
      return $this;
    }

}
