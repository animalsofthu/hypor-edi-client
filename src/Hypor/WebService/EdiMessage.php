<?php

namespace Hypor\WebService;

class EdiMessage
{

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @var string $ExchangeStatusIdRef
     */
    protected $ExchangeStatusIdRef = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var string $RelationId
     */
    protected $RelationId = null;

    /**
     * @var string $MessageCode
     */
    protected $MessageCode = null;

    /**
     * @var string $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $ApplicationCode
     */
    protected $ApplicationCode = null;

    /**
     * @var string $MessageNumber
     */
    protected $MessageNumber = null;

    /**
     * @var string $MessageContent
     */
    protected $MessageContent = null;

    /**
     * @param string $MessageId
     * @param string $ExchangeStatusIdRef
     * @param string $Description
     * @param string $EdiVersion
     * @param \Hypor\WebService\TypeRelationId $RelationId
     * @param string $MessageCode
     * @param string $CreationDate
     * @param string $StartDate
     * @param string $EndDate
     * @param string $ApplicationCode
     * @param string $MessageNumber
     * @param string $MessageContent
     */
    public function __construct($MessageId, $ExchangeStatusIdRef, $Description, $EdiVersion, $RelationId, $MessageCode, $CreationDate, $StartDate, $EndDate, $ApplicationCode, $MessageNumber, $MessageContent)
    {
      $this->MessageId = $MessageId;
      $this->ExchangeStatusIdRef = $ExchangeStatusIdRef;
      $this->Description = $Description;
      $this->EdiVersion = $EdiVersion;
      $this->RelationId = $RelationId;
      $this->MessageCode = $MessageCode;
      $this->CreationDate = $CreationDate;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
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
     * @return \Hypor\WebService\EdiMessage
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExchangeStatusIdRef()
    {
      return $this->ExchangeStatusIdRef;
    }

    /**
     * @param string $ExchangeStatusIdRef
     * @return \Hypor\WebService\EdiMessage
     */
    public function setExchangeStatusIdRef($ExchangeStatusIdRef)
    {
      $this->ExchangeStatusIdRef = $ExchangeStatusIdRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Hypor\WebService\EdiMessage
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Hypor\WebService\EdiMessage
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationId()
    {
      return $this->RelationId;
    }

    /**
     * @param \Hypor\WebService\TypeRelationId $RelationId
     * @return \Hypor\WebService\EdiMessage
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
     * @return \Hypor\WebService\EdiMessage
     */
    public function setMessageCode($MessageCode)
    {
      $this->MessageCode = $MessageCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
      return $this->CreationDate;
    }

    /**
     * @param string $CreationDate
     * @return \Hypor\WebService\EdiMessage
     */
    public function setCreationDate($CreationDate)
    {
      $this->CreationDate = $CreationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return \Hypor\WebService\EdiMessage
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return \Hypor\WebService\EdiMessage
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
     * @return \Hypor\WebService\EdiMessage
     */
    public function setApplicationCode($ApplicationCode)
    {
      $this->ApplicationCode = $ApplicationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageNumber()
    {
      return $this->MessageNumber;
    }

    /**
     * @param string $MessageNumber
     * @return \Hypor\WebService\EdiMessage
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
     * @return \Hypor\WebService\EdiMessage
     */
    public function setMessageContent($MessageContent)
    {
      $this->MessageContent = $MessageContent;
      return $this;
    }

}
