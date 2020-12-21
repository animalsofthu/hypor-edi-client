<?php

namespace Hypor\WebService;

class TypeMessageListResponseMessage
{

    /**
     * @var TypeEdiVersion $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var TypeMessageCode $MessageCode
     */
    protected $MessageCode = null;

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var TypeUtcDateTime $CreationDate
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
     * @var TypeMessageId $MessageId
     */
    protected $MessageId = null;

    /**
     * @param TypeEdiVersion $EdiVersion
     * @param TypeMessageCode $MessageCode
     * @param TypeRelationId $RelationId
     * @param TypeUtcDateTime $CreationDate
     * @param TypeApplicationCode $ApplicationCode
     * @param TypeMessageNumber $MessageNumber
     * @param TypeMessageId $MessageId
     */
    public function __construct($EdiVersion, $MessageCode, $RelationId, $CreationDate, $ApplicationCode, $MessageNumber, $MessageId)
    {
      $this->EdiVersion = $EdiVersion;
      $this->MessageCode = $MessageCode;
      $this->RelationId = $RelationId;
      $this->CreationDate = $CreationDate;
      $this->ApplicationCode = $ApplicationCode;
      $this->MessageNumber = $MessageNumber;
      $this->MessageId = $MessageId;
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setMessageCode($MessageCode)
    {
      $this->MessageCode = $MessageCode;
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

    /**
     * @return TypeUtcDateTime
     */
    public function getCreationDate()
    {
      return $this->CreationDate;
    }

    /**
     * @param TypeUtcDateTime $CreationDate
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
      return $this;
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

}
