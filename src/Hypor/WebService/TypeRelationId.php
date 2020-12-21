<?php

namespace Hypor\WebService;

class TypeRelationId
{

    /**
     * @var int $_
     */
    protected $_ = null;

    /**
     * @var string $IdentType
     */
    protected $IdentType = null;

    /**
     * @param int $_
     * @param string $IdentType
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
     * @return \Hypor\WebService\TypeRelationId
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentType()
    {
      return $this->IdentType;
    }

    /**
     * @param string $IdentType
     * @return \Hypor\WebService\TypeRelationId
     */
    public function setIdentType($IdentType)
    {
      $this->IdentType = $IdentType;
      return $this;
    }

}
