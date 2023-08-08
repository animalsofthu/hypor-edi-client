<?php

namespace Hypor\WebService;

class typeEdiMessage
{

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @var string $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var string $MessageCode
     */
    protected $MessageCode = null;

    /**
     * @var anySimpleType $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var anySimpleType $StartDate
     */
    protected $StartDate = null;

    /**
     * @var anySimpleType $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $ApplicationCode
     */
    protected $ApplicationCode = null;

    /**
     * @var int $MessageNumber
     */
    protected $MessageNumber = null;

    /**
     * @var string $MessageContent
     */
    protected $MessageContent = null;

    /**
     * @param string $MessageId
     * @param string $EdiVersion
     * @param TypeRelationId $RelationId
     * @param string $MessageCode
     * @param anySimpleType $CreationDate
     * @param string $ApplicationCode
     * @param int $MessageNumber
     * @param string $MessageContent
     */
    public function __construct($MessageId, $EdiVersion, $RelationId, $MessageCode, $CreationDate, $ApplicationCode, $MessageNumber, $MessageContent)
    {
      $this->MessageId = $MessageId;
      $this->EdiVersion = $EdiVersion;
      $this->RelationId = $RelationId;
      $this->MessageCode = $MessageCode;
      $this->CreationDate = $CreationDate;
      $this->ApplicationCode = $ApplicationCode;
      $this->MessageNumber = $MessageNumber;
      $this->MessageContent = $MessageContent;
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
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
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
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
      return $this;
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
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageCode()
    {
      return $this->MessageCode;
    }

    /**
     * @param string $MessageCode
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setMessageCode($MessageCode)
    {
      $this->MessageCode = $MessageCode;
      return $this;
    }

    /**
     * @return anySimpleType
     */
    public function getCreationDate()
    {
      return $this->CreationDate;
    }

    /**
     * @param anySimpleType $CreationDate
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setCreationDate($CreationDate)
    {
      $this->CreationDate = $CreationDate;
      return $this;
    }

    /**
     * @return anySimpleType
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param anySimpleType $StartDate
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return anySimpleType
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param anySimpleType $EndDate
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicationCode()
    {
      return $this->ApplicationCode;
    }

    /**
     * @param string $ApplicationCode
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setApplicationCode($ApplicationCode)
    {
      $this->ApplicationCode = $ApplicationCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getMessageNumber()
    {
      return $this->MessageNumber;
    }

    /**
     * @param int $MessageNumber
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
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
     * @return \Hypor\WebService\typeEdiMessage
     */
    public function setMessageContent($MessageContent)
    {
      $this->MessageContent = $MessageContent;
      return $this;
    }

}
