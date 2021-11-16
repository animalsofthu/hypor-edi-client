<?php

namespace Hypor\WebService;

class EdiPigsWebservice extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getMessageRequest' => 'Hypor\\WebService\\getMessageRequest',
      'getMessageResponse' => 'Hypor\\WebService\\getMessageResponse',
      'EdiMessage' => 'Hypor\\WebService\\EdiMessage',
      'putMessageResponse' => 'Hypor\\WebService\\putMessageResponse',
      'putMessageRequestContainer' => 'Hypor\\WebService\\putMessageRequestContainer',
      'TypeputMessageRequest' => 'Hypor\\WebService\\TypeputMessageRequest',
      'typeEdiMessage' => 'Hypor\\WebService\\typeEdiMessage',
      'TypeRelationId' => 'Hypor\\WebService\\TypeRelationId',
      'putMessageRequestContainerResponse' => 'Hypor\\WebService\\putMessageRequestContainerResponse',
      'TypeStatus' => 'Hypor\\WebService\\TypeStatus',
      'getExchangeStatusRequestContainer' => 'Hypor\\WebService\\getExchangeStatusRequestContainer',
      'TypegetExchangeStatusRequest' => 'Hypor\\WebService\\TypegetExchangeStatusRequest',
      'TypeExchangeStatusRequestRelation' => 'Hypor\\WebService\\TypeExchangeStatusRequestRelation',
      'getExchangeStatusRequestContainerResponse' => 'Hypor\\WebService\\getExchangeStatusRequestContainerResponse',
      'TypegetExchangeStatusResponse' => 'Hypor\\WebService\\TypegetExchangeStatusResponse',
      'TypeExchangeStatus' => 'Hypor\\WebService\\TypeExchangeStatus',
      'MissingMessages' => 'Hypor\\WebService\\MissingMessages',
      'AnimalSynchronisations' => 'Hypor\\WebService\\AnimalSynchronisations',
      'TypeSynchronisationIndication' => 'Hypor\\WebService\\TypeSynchronisationIndication',
      'TypeAnimal' => 'Hypor\\WebService\\TypeAnimal',
      'getMessageListRequestContainer' => 'Hypor\\WebService\\getMessageListRequestContainer',
      'TypegetMessageListRequest' => 'Hypor\\WebService\\TypegetMessageListRequest',
      'TypeMessageListRequestRelation' => 'Hypor\\WebService\\TypeMessageListRequestRelation',
      'getMessageListRequestContainerResponse' => 'Hypor\\WebService\\getMessageListRequestContainerResponse',
      'TypegetMessageListResponse' => 'Hypor\\WebService\\TypegetMessageListResponse',
      'MessageList' => 'Hypor\\WebService\\MessageList',
      'TypeMessageListResponseMessage' => 'Hypor\\WebService\\TypeMessageListResponseMessage',
      'getMessageRequestContainer' => 'Hypor\\WebService\\getMessageRequestContainer',
      'getMessageRequestContainerResponse' => 'Hypor\\WebService\\getMessageRequestContainerResponse',
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
        $wsdl = '/../../../EdiPigsWebservice.wsdl';
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
