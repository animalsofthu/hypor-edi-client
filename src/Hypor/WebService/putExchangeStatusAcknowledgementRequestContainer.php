<?php

namespace Hypor\WebService;

class putExchangeStatusAcknowledgementRequestContainer
{

    /**
     * @var TypeputExchangeStatusAcknowledgementRequest $putExchangeStatusAcknowledgementRequest
     */
    protected $putExchangeStatusAcknowledgementRequest = null;

    /**
     * @param TypeputExchangeStatusAcknowledgementRequest $putExchangeStatusAcknowledgementRequest
     */
    public function __construct($putExchangeStatusAcknowledgementRequest)
    {
      $this->putExchangeStatusAcknowledgementRequest = $putExchangeStatusAcknowledgementRequest;
    }

    /**
     * @return TypeputExchangeStatusAcknowledgementRequest
     */
    public function getPutExchangeStatusAcknowledgementRequest()
    {
      return $this->putExchangeStatusAcknowledgementRequest;
    }

    /**
     * @param TypeputExchangeStatusAcknowledgementRequest $putExchangeStatusAcknowledgementRequest
     * @return \Hypor\WebService\putExchangeStatusAcknowledgementRequestContainer
     */
    public function setPutExchangeStatusAcknowledgementRequest($putExchangeStatusAcknowledgementRequest)
    {
      $this->putExchangeStatusAcknowledgementRequest = $putExchangeStatusAcknowledgementRequest;
      return $this;
    }

}
