<?php

namespace Hypor\WebService;

class TypeExchangeStatusRequestRelation
{

    /**
     * @var TypeRelationId $RelationId
     */
    protected $RelationId = null;

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
     * @return \Hypor\WebService\TypeExchangeStatusRequestRelation
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

}
