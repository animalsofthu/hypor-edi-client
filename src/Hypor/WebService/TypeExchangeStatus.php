<?php

namespace Hypor\WebService;

class TypeExchangeStatus
{

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var TypeMessageId $ExchangeStatusIdRef
     */
    protected $ExchangeStatusIdRef = null;

    /**
     * @var TypeEdiVersion $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var TypeApplicationCode $ApplicationCode
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
     * @param TypeRelationId $RelationId
     * @param TypeMessageId $ExchangeStatusIdRef
     * @param TypeEdiVersion $EdiVersion
     * @param TypeApplicationCode $ApplicationCode
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
     * @return TypeRelationId
     */
    public function getRelationId()
    {
      return $this->RelationId;
    }

    /**
     * @param TypeRelationId $RelationId
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
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
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setExchangeStatusIdRef($ExchangeStatusIdRef)
    {
      $this->ExchangeStatusIdRef = $ExchangeStatusIdRef;
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
     * @return \Hypor\WebService\TypeExchangeStatus
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
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
