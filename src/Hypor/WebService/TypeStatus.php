<?php

namespace Hypor\WebService;

class TypeStatus
{

    /**
     * @var TypeStatusCode $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var TypeStatusText $StatusText
     */
    protected $StatusText = null;

    /**
     * @param TypeStatusCode $StatusCode
     * @param TypeStatusText $StatusText
     */
    public function __construct($StatusCode, $StatusText)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusText = $StatusText;
    }

    /**
     * @return TypeStatusCode
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param TypeStatusCode $StatusCode
     * @return \Hypor\WebService\TypeStatus
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return TypeStatusText
     */
    public function getStatusText()
    {
      return $this->StatusText;
    }

    /**
     * @param TypeStatusText $StatusText
     * @return \Hypor\WebService\TypeStatus
     */
    public function setStatusText($StatusText)
    {
      $this->StatusText = $StatusText;
      return $this;
    }

}
