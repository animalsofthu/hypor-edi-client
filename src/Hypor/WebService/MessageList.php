<?php

namespace Hypor\WebService;

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
     * @return \Hypor\WebService\MessageList
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
