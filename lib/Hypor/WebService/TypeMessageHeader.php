<?php

namespace Hypor\WebService;

class TypeMessageHeader
{

    /**
     * @var TypeMessageId $DialogueMessageId
     */
    protected $DialogueMessageId = null;

    /**
     * @var TypeRelationId $SenderId
     */
    protected $SenderId = null;

    /**
     * @var TypeRelationId $ReceiverId
     */
    protected $ReceiverId = null;

    /**
     * @var TypeUtcDateTime $SendingDateTime
     */
    protected $SendingDateTime = null;

    /**
     * @var TypeMessageId $DialogueMessageIdRef
     */
    protected $DialogueMessageIdRef = null;

    /**
     * @param TypeMessageId $DialogueMessageId
     * @param TypeRelationId $SenderId
     * @param TypeRelationId $ReceiverId
     * @param TypeUtcDateTime $SendingDateTime
     */
    public function __construct($DialogueMessageId, $SenderId, $ReceiverId, $SendingDateTime)
    {
      $this->DialogueMessageId = $DialogueMessageId;
      $this->SenderId = $SenderId;
      $this->ReceiverId = $ReceiverId;
      $this->SendingDateTime = $SendingDateTime;
    }

    /**
     * @return TypeMessageId
     */
    public function getDialogueMessageId()
    {
      return $this->DialogueMessageId;
    }

    /**
     * @param TypeMessageId $DialogueMessageId
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setDialogueMessageId($DialogueMessageId)
    {
      $this->DialogueMessageId = $DialogueMessageId;
      return $this;
    }

    /**
     * @return TypeRelationId
     */
    public function getSenderId()
    {
      return $this->SenderId;
    }

    /**
     * @param TypeRelationId $SenderId
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setSenderId($SenderId)
    {
      $this->SenderId = $SenderId;
      return $this;
    }

    /**
     * @return TypeRelationId
     */
    public function getReceiverId()
    {
      return $this->ReceiverId;
    }

    /**
     * @param TypeRelationId $ReceiverId
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setReceiverId($ReceiverId)
    {
      $this->ReceiverId = $ReceiverId;
      return $this;
    }

    /**
     * @return TypeUtcDateTime
     */
    public function getSendingDateTime()
    {
      return $this->SendingDateTime;
    }

    /**
     * @param TypeUtcDateTime $SendingDateTime
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setSendingDateTime($SendingDateTime)
    {
      $this->SendingDateTime = $SendingDateTime;
      return $this;
    }

    /**
     * @return TypeMessageId
     */
    public function getDialogueMessageIdRef()
    {
      return $this->DialogueMessageIdRef;
    }

    /**
     * @param TypeMessageId $DialogueMessageIdRef
     * @return \Hypor\WebService\TypeMessageHeader
     */
    public function setDialogueMessageIdRef($DialogueMessageIdRef)
    {
      $this->DialogueMessageIdRef = $DialogueMessageIdRef;
      return $this;
    }

}
