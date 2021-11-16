<?php

namespace Hypor\WebService;

class TypeMessageListResponseMessage
{

    /**
     * @var string $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var string $MessageCode
     */
    protected $MessageCode = null;

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

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
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @param string $EdiVersion
     * @param string $MessageCode
     * @param TypeRelationId $RelationId
     * @param anySimpleType $CreationDate
     * @param anySimpleType $StartDate
     * @param anySimpleType $EndDate
     * @param string $ApplicationCode
     * @param int $MessageNumber
     * @param string $MessageId
     */
    public function __construct($EdiVersion, $MessageCode, $RelationId, $CreationDate, $StartDate, $EndDate, $ApplicationCode, $MessageNumber, $MessageId)
    {
      $this->EdiVersion = $EdiVersion;
      $this->MessageCode = $MessageCode;
      $this->RelationId = $RelationId;
      $this->CreationDate = $CreationDate;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->ApplicationCode = $ApplicationCode;
      $this->MessageNumber = $MessageNumber;
      $this->MessageId = $MessageId;
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
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
     * @return anySimpleType
     */
    public function getCreationDate()
    {
      return $this->CreationDate;
    }

    /**
     * @param anySimpleType $CreationDate
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setMessageNumber($MessageNumber)
    {
      $this->MessageNumber = $MessageNumber;
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

}
