<?php

namespace Hypor\TestWebService;

class TypeRelationId
{

    /**
     * @var int $_
     */
    protected $_ = null;

    /**
     * @var TypeIdentType $IdentType
     */
    protected $IdentType = null;

    /**
     * @param int $_
     * @param TypeIdentType $IdentType
     */
    public function __construct($_, $IdentType)
    {
      $this->_ = $_;
      $this->IdentType = $IdentType;
    }

    /**
     * @return int
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param int $_
     * @return \Hypor\TestWebService\TypeRelationId
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return TypeIdentType
     */
    public function getIdentType()
    {
      return $this->IdentType;
    }

    /**
     * @param TypeIdentType $IdentType
     * @return \Hypor\TestWebService\TypeRelationId
     */
    public function setIdentType($IdentType)
    {
      $this->IdentType = $IdentType;
      return $this;
    }

}
