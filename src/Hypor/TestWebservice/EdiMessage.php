<?php

namespace Hypor\TestWebService;

class EdiMessage
{

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var string $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @var string $MessageContent
     */
    protected $MessageContent = null;

    /**
     * @param TypeRelationId $RelationId
     * @param string $EdiVersion
     * @param string $MessageId
     * @param string $MessageContent
     */
    public function __construct($RelationId, $EdiVersion, $MessageId, $MessageContent)
    {
      $this->RelationId = $RelationId;
      $this->EdiVersion = $EdiVersion;
      $this->MessageId = $MessageId;
      $this->MessageContent = $MessageContent;
    }

    /**
     * @return TypeRelationId
     */
    public function getRelationId()
    {
      return $this->RelationId;
    }

    /**
     * @param TypeRelationId $RelationId
     * @return \Hypor\TestWebService\EdiMessage
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEdiVersion()
    {
      return $this->EdiVersion;
    }

    /**
     * @param string $EdiVersion
     * @return \Hypor\TestWebService\EdiMessage
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param string $MessageId
     * @return \Hypor\TestWebService\EdiMessage
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageContent()
    {
      return $this->MessageContent;
    }

    /**
     * @param string $MessageContent
     * @return \Hypor\TestWebService\EdiMessage
     */
    public function setMessageContent($MessageContent)
    {
      $this->MessageContent = $MessageContent;
      return $this;
    }

}
