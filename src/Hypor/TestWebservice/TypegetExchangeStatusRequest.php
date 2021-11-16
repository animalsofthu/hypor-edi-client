<?php

namespace Hypor\TestWebService;

class TypegetExchangeStatusRequest
{

    /**
     * @var string $Authenticationtoken
     */
    protected $Authenticationtoken = null;

    /**
     * @var string $EdiVersion
     */
    protected $EdiVersion = null;

    /**
     * @var TypeExchangeStatusRequestRelation $Relation
     */
    protected $Relation = null;

    /**
     * @param string $Authenticationtoken
     * @param string $EdiVersion
     * @param TypeExchangeStatusRequestRelation $Relation
     */
    public function __construct($Authenticationtoken, $EdiVersion, $Relation)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      $this->EdiVersion = $EdiVersion;
      $this->Relation = $Relation;
    }

    /**
     * @return string
     */
    public function getAuthenticationtoken()
    {
      return $this->Authenticationtoken;
    }

    /**
     * @param string $Authenticationtoken
     * @return \Hypor\TestWebService\TypegetExchangeStatusRequest
     */
    public function setAuthenticationtoken($Authenticationtoken)
    {
      $this->Authenticationtoken = $Authenticationtoken;
      return $this;
    }

    /**
     * @return string
     */
    public function getEdiVersion()
    {
      return $this->EdiVersion;
    }

    /**
     * @param string $EdiVersion
     * @return \Hypor\TestWebService\TypegetExchangeStatusRequest
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
     * @return \Hypor\TestWebService\TypegetExchangeStatusRequest
     */
    public function setRelation($Relation)
    {
      $this->Relation = $Relation;
      return $this;
    }

}
