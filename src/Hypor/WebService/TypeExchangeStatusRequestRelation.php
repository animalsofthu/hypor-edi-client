<?php

namespace Hypor\WebService;

class TypeExchangeStatusRequestRelation
{

    /**
     * @var string $RelationId
     */
    protected $RelationId = null;

    /**
     * @param string $RelationId
     */
    public function __construct($RelationId)
    {
      $this->RelationId = $RelationId;
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
     * @return \Hypor\WebService\TypeExchangeStatusRequestRelation
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

}
