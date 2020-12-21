<?php

namespace Hypor\WebService;

class putExchangeStatusAcknowledgementResponseContainer
{

    /**
     * @var putExchangeStatusAcknowledgementResponse $putExchangeStatusAcknowledgementResponse
     */
    protected $putExchangeStatusAcknowledgementResponse = null;

    /**
     * @param putExchangeStatusAcknowledgementResponse $putExchangeStatusAcknowledgementResponse
     */
    public function __construct($putExchangeStatusAcknowledgementResponse)
    {
      $this->putExchangeStatusAcknowledgementResponse = $putExchangeStatusAcknowledgementResponse;
    }

    /**
     * @return putExchangeStatusAcknowledgementResponse
     */
    public function getPutExchangeStatusAcknowledgementResponse()
    {
      return $this->putExchangeStatusAcknowledgementResponse;
    }

    /**
     * @param putExchangeStatusAcknowledgementResponse $putExchangeStatusAcknowledgementResponse
     * @return \Hypor\WebService\putExchangeStatusAcknowledgementResponseContainer
     */
    public function setPutExchangeStatusAcknowledgementResponse($putExchangeStatusAcknowledgementResponse)
    {
      $this->putExchangeStatusAcknowledgementResponse = $putExchangeStatusAcknowledgementResponse;
      return $this;
    }

}
