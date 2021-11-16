<?php

namespace Hypor\TestWebService;

class TypeMessageListRequestRelation
{

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var anySimpleType $FromDate
     */
    protected $FromDate = null;

    /**
     * @var anySimpleType $ToDate
     */
    protected $ToDate = null;

    /**
     * @param TypeRelationId $RelationId
     */
    public function __construct($RelationId)
    {
      $this->RelationId = $RelationId;
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
     * @return \Hypor\TestWebService\TypeMessageListRequestRelation
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

    /**
     * @return anySimpleType
     */
    public function getFromDate()
    {
      return $this->FromDate;
    }

    /**
     * @param anySimpleType $FromDate
     * @return \Hypor\TestWebService\TypeMessageListRequestRelation
     */
    public function setFromDate($FromDate)
    {
      $this->FromDate = $FromDate;
      return $this;
    }

    /**
     * @return anySimpleType
     */
    public function getToDate()
    {
      return $this->ToDate;
    }

    /**
     * @param anySimpleType $ToDate
     * @return \Hypor\TestWebService\TypeMessageListRequestRelation
     */
    public function setToDate($ToDate)
    {
      $this->ToDate = $ToDate;
      return $this;
    }

}
