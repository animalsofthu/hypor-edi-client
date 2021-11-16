<?php

namespace Hypor\TestWebService;

class MessageList
{

    /**
     * @var TypeMessageListResponseMessage $Message
     */
    protected $Message = null;

    /**
     * @param TypeMessageListResponseMessage $Message
     */
    public function __construct($Message)
    {
      $this->Message = $Message;
    }

    /**
     * @return TypeMessageListResponseMessage
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param TypeMessageListResponseMessage $Message
     * @return \Hypor\TestWebService\MessageList
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
