<?php

namespace Hypor\WebService;

class TypeExchangeStatus
{

    /**
     * @var \Hypor\WebService\TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var string $ExchangeStatusIdRef
     */
    protected $ExchangeStatusIdRef = null;

    /**
     * @var string $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var string $ApplicationCode
     */
    protected $ApplicationCode = null;

    /**
     * @var MissingMessagesToBeDelivered $MissingMessagesToBeDelivered
     */
    protected $MissingMessagesToBeDelivered = null;

    /**
     * @var MissingMessagesNotToBeDelivered $MissingMessagesNotToBeDelivered
     */
    protected $MissingMessagesNotToBeDelivered = null;

    /**
     * @var AnimalSynchronisationsToBeDelivered $AnimalSynchronisationsToBeDelivered
     */
    protected $AnimalSynchronisationsToBeDelivered = null;

    /**
     * @var AnimalSynchronisationsNotToBeDelivered $AnimalSynchronisationsNotToBeDelivered
     */
    protected $AnimalSynchronisationsNotToBeDelivered = null;

    /**
     * @param \Hypor\WebService\TypeRelationId $RelationId
     * @param string $ExchangeStatusIdRef
     * @param string $EdiVersion
     * @param string $ApplicationCode
     * @param MissingMessagesToBeDelivered $MissingMessagesToBeDelivered
     * @param MissingMessagesNotToBeDelivered $MissingMessagesNotToBeDelivered
     * @param AnimalSynchronisationsToBeDelivered $AnimalSynchronisationsToBeDelivered
     * @param AnimalSynchronisationsNotToBeDelivered $AnimalSynchronisationsNotToBeDelivered
     */
    public function __construct($RelationId, $ExchangeStatusIdRef, $EdiVersion, $ApplicationCode, $MissingMessagesToBeDelivered, $MissingMessagesNotToBeDelivered, $AnimalSynchronisationsToBeDelivered, $AnimalSynchronisationsNotToBeDelivered)
    {
      $this->RelationId = $RelationId;
      $this->ExchangeStatusIdRef = $ExchangeStatusIdRef;
      $this->EdiVersion = $EdiVersion;
      $this->ApplicationCode = $ApplicationCode;
      $this->MissingMessagesToBeDelivered = $MissingMessagesToBeDelivered;
      $this->MissingMessagesNotToBeDelivered = $MissingMessagesNotToBeDelivered;
      $this->AnimalSynchronisationsToBeDelivered = $AnimalSynchronisationsToBeDelivered;
      $this->AnimalSynchronisationsNotToBeDelivered = $AnimalSynchronisationsNotToBeDelivered;
    }

    /**
     * @return \Hypor\WebService\TypeRelationId
     */
    public function getRelationId()
    {
      return $this->RelationId;
    }

    /**
     * @param \Hypor\WebService\TypeRelationId $RelationId
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
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
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setExchangeStatusIdRef($ExchangeStatusIdRef)
    {
      $this->ExchangeStatusIdRef = $ExchangeStatusIdRef;
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
     * @return \Hypor\WebService\TypeExchangeStatus
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
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setApplicationCode($ApplicationCode)
    {
      $this->ApplicationCode = $ApplicationCode;
      return $this;
    }

    /**
     * @return MissingMessagesToBeDelivered
     */
    public function getMissingMessagesToBeDelivered()
    {
      return $this->MissingMessagesToBeDelivered;
    }

    /**
     * @param MissingMessagesToBeDelivered $MissingMessagesToBeDelivered
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setMissingMessagesToBeDelivered($MissingMessagesToBeDelivered)
    {
      $this->MissingMessagesToBeDelivered = $MissingMessagesToBeDelivered;
      return $this;
    }

    /**
     * @return MissingMessagesNotToBeDelivered
     */
    public function getMissingMessagesNotToBeDelivered()
    {
      return $this->MissingMessagesNotToBeDelivered;
    }

    /**
     * @param MissingMessagesNotToBeDelivered $MissingMessagesNotToBeDelivered
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setMissingMessagesNotToBeDelivered($MissingMessagesNotToBeDelivered)
    {
      $this->MissingMessagesNotToBeDelivered = $MissingMessagesNotToBeDelivered;
      return $this;
    }

    /**
     * @return AnimalSynchronisationsToBeDelivered
     */
    public function getAnimalSynchronisationsToBeDelivered()
    {
      return $this->AnimalSynchronisationsToBeDelivered;
    }

    /**
     * @param AnimalSynchronisationsToBeDelivered $AnimalSynchronisationsToBeDelivered
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setAnimalSynchronisationsToBeDelivered($AnimalSynchronisationsToBeDelivered)
    {
      $this->AnimalSynchronisationsToBeDelivered = $AnimalSynchronisationsToBeDelivered;
      return $this;
    }

    /**
     * @return AnimalSynchronisationsNotToBeDelivered
     */
    public function getAnimalSynchronisationsNotToBeDelivered()
    {
      return $this->AnimalSynchronisationsNotToBeDelivered;
    }

    /**
     * @param AnimalSynchronisationsNotToBeDelivered $AnimalSynchronisationsNotToBeDelivered
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setAnimalSynchronisationsNotToBeDelivered($AnimalSynchronisationsNotToBeDelivered)
    {
      $this->AnimalSynchronisationsNotToBeDelivered = $AnimalSynchronisationsNotToBeDelivered;
      return $this;
    }

}
