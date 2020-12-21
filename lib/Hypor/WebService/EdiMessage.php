<?php

namespace Hypor\WebService;

class EdiMessage
{

    /**
     * @var TypeMessageId $MessageId
     */
    protected $MessageId = null;

    /**
     * @var TypeMessageId $ExchangeStatusIdRef
     */
    protected $ExchangeStatusIdRef = null;

    /**
     * @var TypeDescription $Description
     */
    protected $Description = null;

    /**
     * @var TypeEdiVersion $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var TypeMessageCode $MessageCode
     */
    protected $MessageCode = null;

    /**
     * @var TypeDate $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var TypeDate $StartDate
     */
    protected $StartDate = null;

    /**
     * @var TypeDate $EndDate
     */
    protected $EndDate = null;

    /**
     * @var TypeApplicationCode $ApplicationCode
     */
    protected $ApplicationCode = null;

    /**
     * @var TypeMessageNumber $MessageNumber
     */
    protected $MessageNumber = null;

    /**
     * @var TypeMessageContent $MessageContent
     */
    protected $MessageContent = null;

    /**
     * @param TypeMessageId $MessageId
     * @param TypeMessageId $ExchangeStatusIdRef
     * @param TypeDescription $Description
     * @param TypeEdiVersion $EdiVersion
     * @param TypeRelationId $RelationId
     * @param TypeMessageCode $MessageCode
     * @param TypeDate $CreationDate
     * @param TypeDate $StartDate
     * @param TypeDate $EndDate
     * @param TypeApplicationCode $ApplicationCode
     * @param TypeMessageNumber $MessageNumber
     * @param TypeMessageContent $MessageContent
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
     * @return TypeMessageId
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param TypeMessageId $MessageId
     * @return \Hypor\WebService\EdiMessage
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return TypeMessageId
     */
    public function getExchangeStatusIdRef()
    {
      return $this->ExchangeStatusIdRef;
    }

    /**
     * @param TypeMessageId $ExchangeStatusIdRef
     * @return \Hypor\WebService\EdiMessage
     */
    public function setExchangeStatusIdRef($ExchangeStatusIdRef)
    {
      $this->ExchangeStatusIdRef = $ExchangeStatusIdRef;
      return $this;
    }

    /**
     * @return TypeDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param TypeDescription $Description
     * @return \Hypor\WebService\EdiMessage
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return TypeEdiVersion
     */
    public function getEdiVersion()
    {
      return $this->EdiVersion;
    }

    /**
     * @param TypeEdiVersion $EdiVersion
     * @return \Hypor\WebService\EdiMessage
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
     * @return \Hypor\WebService\EdiMessage
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

    /**
     * @return TypeMessageCode
     */
    public function getMessageCode()
    {
      return $this->MessageCode;
    }

    /**
     * @param TypeMessageCode $MessageCode
     * @return \Hypor\WebService\EdiMessage
     */
    public function setMessageCode($MessageCode)
    {
      $this->MessageCode = $MessageCode;
      return $this;
    }

    /**
     * @return TypeDate
     */
    public function getCreationDate()
    {
      return $this->CreationDate;
    }

    /**
     * @param TypeDate $CreationDate
     * @return \Hypor\WebService\EdiMessage
     */
    public function setCreationDate($CreationDate)
    {
      $this->CreationDate = $CreationDate;
      return $this;
    }

    /**
     * @return TypeDate
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param TypeDate $StartDate
     * @return \Hypor\WebService\EdiMessage
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return TypeDate
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param TypeDate $EndDate
     * @return \Hypor\WebService\EdiMessage
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return TypeApplicationCode
     */
    public function getApplicationCode()
    {
      return $this->ApplicationCode;
    }

    /**
     * @param TypeApplicationCode $ApplicationCode
     * @return \Hypor\WebService\EdiMessage
     */
    public function setApplicationCode($ApplicationCode)
    {
      $this->ApplicationCode = $ApplicationCode;
      return $this;
    }

    /**
     * @return TypeMessageNumber
     */
    public function getMessageNumber()
    {
      return $this->MessageNumber;
    }

    /**
     * @param TypeMessageNumber $MessageNumber
     * @return \Hypor\WebService\EdiMessage
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
      return $this;
    }

    /**
     * @return TypeMessageContent
     */
    public function getMessageContent()
    {
      return $this->MessageContent;
    }

    /**
     * @param TypeMessageContent $MessageContent
     * @return \Hypor\WebService\EdiMessage
     */
    public function setMessageContent($MessageContent)
    {
      $this->MessageContent = $MessageContent;
      return $this;
    }

}
