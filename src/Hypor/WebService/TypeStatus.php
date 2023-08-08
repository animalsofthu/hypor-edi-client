<?php

namespace Hypor\WebService;

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
     * @return \Hypor\WebService\TypeStatus
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
     * @return \Hypor\WebService\TypeStatus
     */
    public function setStatusText($StatusText)
    {
      $this->StatusText = $StatusText;
      return $this;
    }

}
