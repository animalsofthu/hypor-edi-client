<?php

namespace Hypor\WebService;

class TypeMessageHeader
{

    /**
     * @var string $DialogueMessageId
     */
    protected $DialogueMessageId = null;

    /**
     * @var string $SenderId
     */
    protected $SenderId = null;

    /**
     * @var string $ReceiverId
     */
    protected $ReceiverId = null;

    /**
     * @var string $SendingDateTime
     */
    protected $SendingDateTime = null;

    /**
     * @var string $DialogueMessageIdRef
     */
    protected $DialogueMessageIdRef = null;

    /**
     * @param string $DialogueMessageId
     * @param string $SenderId
     * @param string $ReceiverId
     * @param string $SendingDateTime
     */
    public function __construct($DialogueMessageId, $SenderId, $ReceiverId, $SendingDateTime)
    {
      $this->DialogueMessageId = $DialogueMessageId;
      $this->SenderId = $SenderId;
      $this->ReceiverId = $ReceiverId;
      $this->SendingDateTime = $SendingDateTime;
    }

    /**
     * @return string
     */
    public function getDialogueMessageId()
    {
      return $this->DialogueMessageId;
    }

    /**
     * @param string $DialogueMessageId
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setDialogueMessageId($DialogueMessageId)
    {
      $this->DialogueMessageId = $DialogueMessageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderId()
    {
      return $this->SenderId;
    }

    /**
     * @param string $SenderId
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setSenderId($SenderId)
    {
      $this->SenderId = $SenderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiverId()
    {
      return $this->ReceiverId;
    }

    /**
     * @param string $ReceiverId
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setReceiverId($ReceiverId)
    {
      $this->ReceiverId = $ReceiverId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendingDateTime()
    {
      return $this->SendingDateTime;
    }

    /**
     * @param string $SendingDateTime
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setSendingDateTime($SendingDateTime)
    {
      $this->SendingDateTime = $SendingDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDialogueMessageIdRef()
    {
      return $this->DialogueMessageIdRef;
    }

    /**
     * @param string $DialogueMessageIdRef
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setDialogueMessageIdRef($DialogueMessageIdRef)
    {
      $this->DialogueMessageIdRef = $DialogueMessageIdRef;
      return $this;
    }

}
