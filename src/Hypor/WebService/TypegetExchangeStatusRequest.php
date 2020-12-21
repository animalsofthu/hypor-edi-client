<?php

namespace Hypor\WebService;

class TypegetExchangeStatusRequest
{

    /**
     * @var TypeAuthenticationtoken $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var TypeEdiVersion $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var TypeExchangeStatusRequestRelation $Relation
     */
    protected $Relation = null;

    /**
     * @param TypeAuthenticationtoken $Authenticationtoken
     * @param TypeEdiVersion $EdiVersion
     * @param TypeExchangeStatusRequestRelation $Relation
     */
    public function __construct($Authenticationtoken, $EdiVersion, $Relation)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      $this->EdiVersion = $EdiVersion;
      $this->Relation = $Relation;
    }

    /**
     * @return TypeAuthenticationtoken
     */
    public function getAuthenticationtoken()
    {
      return $this->Authenticationtoken;
    }

    /**
     * @param TypeAuthenticationtoken $Authenticationtoken
     * @return \Hypor\WebService\TypegetExchangeStatusRequest
     */
    public function setAuthenticationtoken($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
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
     * @return \Hypor\WebService\TypegetExchangeStatusRequest
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
      return $this;
    }

    /**
     * @return TypeExchangeStatusRequestRelation
     */
    public function getRelation()
    {
      return $this->Relation;
    }

    /**
     * @param TypeExchangeStatusRequestRelation $Relation
     * @return \Hypor\WebService\TypegetExchangeStatusRequest
     */
    public function setRelation($Relation)
    {
      $this->Relation = $Relation;
      return $this;
    }

}