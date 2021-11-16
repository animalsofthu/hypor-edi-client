<?php

namespace Hypor\TestWebService;

class TypeExchangeStatus
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
     * @var string $ApplicationCode
     */
    protected $ApplicationCode = null;

    /**
     * @var TypeSynchronisationIndication $SynchronisationIndication
     */
    protected $SynchronisationIndication = null;

    /**
     * @var MissingMessages $MissingMessages
     */
    protected $MissingMessages = null;

    /**
     * @var AnimalSynchronisations $AnimalSynchronisations
     */
    protected $AnimalSynchronisations = null;

    /**
     * @var TypeStatus $Report
     */
    protected $Report = null;

    /**
     * @param TypeRelationId $RelationId
     * @param string $EdiVersion
     * @param string $ApplicationCode
     * @param TypeStatus $Report
     */
    public function __construct($RelationId, $EdiVersion, $ApplicationCode, $Report)
    {
      $this->RelationId = $RelationId;
      $this->EdiVersion = $EdiVersion;
      $this->ApplicationCode = $ApplicationCode;
      $this->Report = $Report;
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
     * @return \Hypor\TestWebService\TypeExchangeStatus
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
     * @return \Hypor\TestWebService\TypeExchangeStatus
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
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
     * @return \Hypor\TestWebService\TypeExchangeStatus
     */
    public function setApplicationCode($ApplicationCode)
    {
      $this->ApplicationCode = $ApplicationCode;
      return $this;
    }

    /**
     * @return TypeSynchronisationIndication
     */
    public function getSynchronisationIndication()
    {
      return $this->SynchronisationIndication;
    }

    /**
     * @param TypeSynchronisationIndication $SynchronisationIndication
     * @return \Hypor\TestWebService\TypeExchangeStatus
     */
    public function setSynchronisationIndication($SynchronisationIndication)
    {
      $this->SynchronisationIndication = $SynchronisationIndication;
      return $this;
    }

    /**
     * @return MissingMessages
     */
    public function getMissingMessages()
    {
      return $this->MissingMessages;
    }

    /**
     * @param MissingMessages $MissingMessages
     * @return \Hypor\TestWebService\TypeExchangeStatus
     */
    public function setMissingMessages($MissingMessages)
    {
      $this->MissingMessages = $MissingMessages;
      return $this;
    }

    /**
     * @return AnimalSynchronisations
     */
    public function getAnimalSynchronisations()
    {
      return $this->AnimalSynchronisations;
    }

    /**
     * @param AnimalSynchronisations $AnimalSynchronisations
     * @return \Hypor\TestWebService\TypeExchangeStatus
     */
    public function setAnimalSynchronisations($AnimalSynchronisations)
    {
      $this->AnimalSynchronisations = $AnimalSynchronisations;
      return $this;
    }

    /**
     * @return TypeStatus
     */
    public function getReport()
    {
      return $this->Report;
    }

    /**
     * @param TypeStatus $Report
     * @return \Hypor\TestWebService\TypeExchangeStatus
     */
    public function setReport($Report)
    {
      $this->Report = $Report;
      return $this;
    }

}
