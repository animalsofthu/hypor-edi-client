<?php

namespace Hypor\WebService;

class TypeMessageListRequestRelation
{

    /**
     * @var string $RelationId
     */
    protected $RelationId = null;

    /**
     * @var string $FromDate
     */
    protected $FromDate = null;

    /**
     * @var string $ToDate
     */
    protected $ToDate = null;

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
     * @return \Hypor\WebService\TypeMessageListRequestRelation
     */
    public function setRelationId($RelationId)
    {
      $this->RelationId = $RelationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
      return $this->FromDate;
    }

    /**
     * @param string $FromDate
     * @return \Hypor\WebService\TypeMessageListRequestRelation
     */
    public function setFromDate($FromDate)
    {
      $this->FromDate = $FromDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
      return $this->ToDate;
    }

    /**
     * @param string $ToDate
     * @return \Hypor\WebService\TypeMessageListRequestRelation
     */
    public function setToDate($ToDate)
    {
      $this->ToDate = $ToDate;
      return $this;
    }

}
