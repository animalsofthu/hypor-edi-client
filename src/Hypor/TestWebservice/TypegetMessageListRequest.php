<?php

namespace Hypor\TestWebService;

class TypegetMessageListRequest
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
     * @var TypeMessageListRequestRelation $Relation
     */
    protected $Relation = null;

    /**
     * @param string $Authenticationtoken
     * @param string $EdiVersion
     * @param TypeMessageListRequestRelation $Relation
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
     * @return \Hypor\TestWebService\TypegetMessageListRequest
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
     * @return \Hypor\TestWebService\TypegetMessageListRequest
     */
    public function setEdiVersion($EdiVersion)
    {
      $this->EdiVersion = $EdiVersion;
      return $this;
    }

    /**
     * @return TypeMessageListRequestRelation
     */
    public function getRelation()
    {
      return $this->Relation;
    }

    /**
     * @param TypeMessageListRequestRelation $Relation
     * @return \Hypor\TestWebService\TypegetMessageListRequest
     */
    public function setRelation($Relation)
    {
      $this->Relation = $Relation;
      return $this;
    }

}
