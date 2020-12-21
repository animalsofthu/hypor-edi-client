<?php

namespace Hypor\WebService;

class TypegetMessageListRequest
{

    /**
     * @var TypeMessageHeader $MessageHeader
     */
    protected $MessageHeader = null;

    /**
     * @var TypeAuthenticationtoken $Authenticationtoken
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
     * @param TypeMessageHeader $MessageHeader
     * @param TypeAuthenticationtoken $Authenticationtoken
     * @param string $EdiVersion
     * @param TypeMessageListRequestRelation $Relation
     */
    public function __construct($MessageHeader, $Authenticationtoken, $EdiVersion, $Relation)
    {
      $this->MessageHeader = $MessageHeader;
      $this->Authenticationtoken = $Authenticationtoken;
      $this->EdiVersion = $EdiVersion;
      $this->Relation = $Relation;
    }

    /**
     * @return TypeMessageHeader
     */
    public function getMessageHeader()
    {
      return $this->MessageHeader;
    }

    /**
     * @param TypeMessageHeader $MessageHeader
     * @return \Hypor\WebService\TypegetMessageListRequest
     */
    public function setMessageHeader($MessageHeader)
    {
      $this->MessageHeader = $MessageHeader;
      return $this;
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
     * @return \Hypor\WebService\TypegetMessageListRequest
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
     * @return \Hypor\WebService\TypegetMessageListRequest
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
     * @return \Hypor\WebService\TypegetMessageListRequest
     */
    public function setRelation($Relation)
    {
      $this->Relation = $Relation;
      return $this;
    }

}
