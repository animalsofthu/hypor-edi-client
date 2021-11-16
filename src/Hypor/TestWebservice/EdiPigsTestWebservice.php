<?php

namespace Hypor\TestWebService;

class EdiPigsTestWebservice extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getMessageRequest' => 'Hypor\\TestWebService\\getMessageRequest',
      'getMessageResponse' => 'Hypor\\TestWebService\\getMessageResponse',
      'EdiMessage' => 'Hypor\\TestWebService\\EdiMessage',
      'putMessageResponse' => 'Hypor\\TestWebService\\putMessageResponse',
      'getMessageListRequestContainer' => 'Hypor\\TestWebService\\getMessageListRequestContainer',
      'TypegetMessageListRequest' => 'Hypor\\TestWebService\\TypegetMessageListRequest',
      'TypeMessageListRequestRelation' => 'Hypor\\TestWebService\\TypeMessageListRequestRelation',
      'TypeRelationId' => 'Hypor\\TestWebService\\TypeRelationId',
      'getMessageListRequestContainerResponse' => 'Hypor\\TestWebService\\getMessageListRequestContainerResponse',
      'TypegetMessageListResponse' => 'Hypor\\TestWebService\\TypegetMessageListResponse',
      'MessageList' => 'Hypor\\TestWebService\\MessageList',
      'TypeStatus' => 'Hypor\\TestWebService\\TypeStatus',
      'TypeMessageListResponseMessage' => 'Hypor\\TestWebService\\TypeMessageListResponseMessage',
      'getMessageRequestContainer' => 'Hypor\\TestWebService\\getMessageRequestContainer',
      'getMessageRequestContainerResponse' => 'Hypor\\TestWebService\\getMessageRequestContainerResponse',
      'putMessageRequestContainer' => 'Hypor\\TestWebService\\putMessageRequestContainer',
      'TypeputMessageRequest' => 'Hypor\\TestWebService\\TypeputMessageRequest',
      'typeEdiMessage' => 'Hypor\\TestWebService\\typeEdiMessage',
      'putMessageRequestContainerResponse' => 'Hypor\\TestWebService\\putMessageRequestContainerResponse',
      'getExchangeStatusRequestContainer' => 'Hypor\\TestWebService\\getExchangeStatusRequestContainer',
      'TypegetExchangeStatusRequest' => 'Hypor\\TestWebService\\TypegetExchangeStatusRequest',
      'TypeExchangeStatusRequestRelation' => 'Hypor\\TestWebService\\TypeExchangeStatusRequestRelation',
      'getExchangeStatusRequestContainerResponse' => 'Hypor\\TestWebService\\getExchangeStatusRequestContainerResponse',
      'TypegetExchangeStatusResponse' => 'Hypor\\TestWebService\\TypegetExchangeStatusResponse',
      'TypeExchangeStatus' => 'Hypor\\TestWebService\\TypeExchangeStatus',
      'MissingMessages' => 'Hypor\\TestWebService\\MissingMessages',
      'AnimalSynchronisations' => 'Hypor\\TestWebService\\AnimalSynchronisations',
      'TypeSynchronisationIndication' => 'Hypor\\TestWebService\\TypeSynchronisationIndication',
      'TypeAnimal' => 'Hypor\\TestWebService\\TypeAnimal',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'login' => 'EDI-Pigs',
      'password' => '',
      'trace' => true,
      'stream_context' => NULL,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '/../../../EdiPigsTestWebservice.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param getMessageRequestContainer $parameters
     * @return getMessageRequestContainerResponse
     */
    public function getMessageRequestContainer(getMessageRequestContainer $parameters)
    {
      return $this->__soapCall('getMessageRequestContainer', array($parameters));
    }

    /**
     * @param putMessageRequestContainer $parameters
     * @return putMessageRequestContainerResponse
     */
    public function putMessageRequestContainer(putMessageRequestContainer $parameters)
    {
      return $this->__soapCall('putMessageRequestContainer', array($parameters));
    }

    /**
     * @param getMessageListRequestContainer $parameters
     * @return getMessageListRequestContainerResponse
     */
    public function getMessageListRequestContainer(getMessageListRequestContainer $parameters)
    {
      return $this->__soapCall('getMessageListRequestContainer', array($parameters));
    }

    /**
     * @param getExchangeStatusRequestContainer $parameters
     * @return getExchangeStatusRequestContainerResponse
     */
    public function getExchangeStatusRequestContainer(getExchangeStatusRequestContainer $parameters)
    {
      return $this->__soapCall('getExchangeStatusRequestContainer', array($parameters));
    }

}
