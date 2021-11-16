<?php

namespace Hypor\TestWebService;

class TypegetMessageListResponse
{

    /**
     * @var TypeStatus $Status
     */
    protected $Status = null;

    /**
     * @var MessageList $MessageList
     */
    protected $MessageList = null;

    /**
     * @param TypeStatus $Status
     * @param MessageList $MessageList
     */
    public function __construct($Status, $MessageList)
    {
      $this->Status = $Status;
      $this->MessageList = $MessageList;
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
     * @return \Hypor\TestWebService\TypegetMessageListResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return MessageList
     */
    public function getMessageList()
    {
      return $this->MessageList;
    }

    /**
     * @param MessageList $MessageList
     * @return \Hypor\TestWebService\TypegetMessageListResponse
     */
    public function setMessageList($MessageList)
    {
      $this->MessageList = $MessageList;
      return $this;
    }

}
