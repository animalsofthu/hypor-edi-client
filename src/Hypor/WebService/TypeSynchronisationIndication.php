<?php

namespace Hypor\WebService;

class TypeSynchronisationIndication
{

    /**
     * @var anonymous24 $Indication
     */
    protected $Indication = null;

    /**
     * @param anonymous24 $Indication
     */
    public function __construct($Indication)
    {
      $this->Indication = $Indication;
    }

    /**
     * @return anonymous24
     */
    public function getIndication()
    {
      return $this->Indication;
    }

    /**
     * @param anonymous24 $Indication
     * @return \Hypor\WebService\TypeSynchronisationIndication
     */
    public function setIndication($Indication)
    {
      $this->Indication = $Indication;
      return $this;
    }

}
