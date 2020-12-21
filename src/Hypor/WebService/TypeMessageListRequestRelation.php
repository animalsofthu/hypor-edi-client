<?php

namespace Hypor\WebService;

class TypeMessageListRequestRelation
{

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @var TypeUtcDateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var TypeUtcDateTime $ToDate
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
     * @return \Hypor\WebService\TypeMessageListRequestRelation
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

    /**
     * @return TypeUtcDateTime
     */
    public function getFromDate()
    {
      return $this->FromDate;
    }

    /**
     * @param TypeUtcDateTime $FromDate
     * @return \Hypor\WebService\TypeMessageListRequestRelation
     */
    public function setFromDate($FromDate)
    {
      $this->FromDate = $FromDate;
      return $this;
    }

    /**
     * @return TypeUtcDateTime
     */
    public function getToDate()
    {
      return $this->ToDate;
    }

    /**
     * @param TypeUtcDateTime $ToDate
     * @return \Hypor\WebService\TypeMessageListRequestRelation
     */
    public function setToDate($ToDate)
    {
      $this->ToDate = $ToDate;
      return $this;
    }

}
