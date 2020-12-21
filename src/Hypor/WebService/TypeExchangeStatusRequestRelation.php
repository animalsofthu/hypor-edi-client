<?php

namespace Hypor\WebService;

class TypeExchangeStatusRequestRelation
{

    /**
     * @var \Hypor\WebService\TypeRelationId $RelationId
     */
    protected $RelationId = null;

    /**
     * @param \Hypor\WebService\TypeRelationId $RelationId
     */
    public function __construct($RelationId)
    {
      $this->RelationId = $RelationId;
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
     * @return \Hypor\WebService\TypeExchangeStatusRequestRelation
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

}
