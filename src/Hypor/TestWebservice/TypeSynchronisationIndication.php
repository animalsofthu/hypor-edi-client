<?php

namespace Hypor\TestWebService;

class TypeSynchronisationIndication
{

    /**
     * @var string $Indication
     */
    protected $Indication = null;

    /**
     * @param string $Indication
     */
    public function __construct($Indication)
    {
      $this->Indication = $Indication;
    }

    /**
     * @return string
     */
    public function getIndication()
    {
      return $this->Indication;
    }

    /**
     * @param string $Indication
     * @return \Hypor\TestWebService\TypeSynchronisationIndication
     */
    public function setIndication($Indication)
    {
      $this->Indication = $Indication;
      return $this;
    }

}
