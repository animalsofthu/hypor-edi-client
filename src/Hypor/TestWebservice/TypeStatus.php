<?php

namespace Hypor\TestWebService;

class TypeStatus
{

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusText
     */
    protected $StatusText = null;

    /**
     * @param int $StatusCode
     * @param string $StatusText
     */
    public function __construct($StatusCode, $StatusText)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusText = $StatusText;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \Hypor\TestWebService\TypeStatus
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusText()
    {
      return $this->StatusText;
    }

    /**
     * @param string $StatusText
     * @return \Hypor\TestWebService\TypeStatus
     */
    public function setStatusText($StatusText)
    {
      $this->StatusText = $StatusText;
      return $this;
    }

}
