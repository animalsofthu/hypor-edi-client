<?php

namespace Hypor\TestWebService;

class getMessageResponse
{

    /**
     * @var TypeStatus $Status
     */
    protected $Status = null;

    /**
     * @var EdiMessage $EdiMessage
     */
    protected $EdiMessage = null;

    /**
     * @param TypeStatus $Status
     * @param EdiMessage $EdiMessage
     */
    public function __construct($Status, $EdiMessage)
    {
      $this->Status = $Status;
      $this->EdiMessage = $EdiMessage;
    }

    /**
     * @return TypeStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param TypeStatus $Status
     * @return \Hypor\TestWebService\getMessageResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return EdiMessage
     */
    public function getEdiMessage()
    {
      return $this->EdiMessage;
    }

    /**
     * @param EdiMessage $EdiMessage
     * @return \Hypor\TestWebService\getMessageResponse
     */
    public function setEdiMessage($EdiMessage)
    {
      $this->EdiMessage = $EdiMessage;
      return $this;
    }

}
