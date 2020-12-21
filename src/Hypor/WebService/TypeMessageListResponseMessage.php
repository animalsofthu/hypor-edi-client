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
     * @var string $RelationId
     */
    protected $RelationId = null;

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
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @param string $EdiVersion
     * @param string $MessageCode
     * @param string $RelationId
     * @param string $CreationDate
     * @param string $ApplicationCode
     * @param string $MessageNumber
     * @param string $MessageId
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
     * @return string
     */
    public function getRelationId()
    {
      return $this->RelationId;
    }

    /**
     * @param string $RelationId
     * @return \Hypor\WebService\TypeMessageListResponseMessage
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return \Hypor\WebService\TypeMessageListResponseMessage
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
     * @return string
     */
    public function getMessageNumber()
    {
      return $this->MessageNumber;
    }

    /**
     * @param string $MessageNumber
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
