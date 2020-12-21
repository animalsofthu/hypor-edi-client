<?php

namespace Hypor\WebService;

class EdiService extends \SoapClient {

  /**
   * @var array $classmap The defined classes
   */
  private static $classmap = [
    'TypeAnimal'                                        => 'Hypor\\WebService\\TypeAnimal',
    'TypeRelationId'                                    => 'Hypor\\WebService\\TypeRelationId',
    'TypeStatus'                                        => 'Hypor\\WebService\\TypeStatus',
    'TypeSynchronisationIndication'                     => 'Hypor\\WebService\\TypeSynchronisationIndication',
    'TypeMessageHeader'                                 => 'Hypor\\WebService\\TypeMessageHeader',
    'TypeMessageListRequestRelation'                    => 'Hypor\\WebService\\TypeMessageListRequestRelation',
    'TypegetMessageListRequest'                         => 'Hypor\\WebService\\TypegetMessageListRequest',
    'TypeMessageListResponseMessage'                    => 'Hypor\\WebService\\TypeMessageListResponseMessage',
    'TypegetMessageListResponse'                        => 'Hypor\\WebService\\TypegetMessageListResponse',
    'MessageList'                                       => 'Hypor\\WebService\\MessageList',
    'getMessageRequest'                                 => 'Hypor\\WebService\\getMessageRequest',
    'getMessageResponse'                                => 'Hypor\\WebService\\getMessageResponse',
    'EdiMessage'                                        => 'Hypor\\WebService\\EdiMessage',
    'putMessageRequest'                                 => 'Hypor\\WebService\\putMessageRequest',
    'putMessageResponse'                                => 'Hypor\\WebService\\putMessageResponse',
    'TypeExchangeStatusRequestRelation'                 => 'Hypor\\WebService\\TypeExchangeStatusRequestRelation',
    'TypegetExchangeStatusRequest'                      => 'Hypor\\WebService\\TypegetExchangeStatusRequest',
    'TypeExchangeStatus'                                => 'Hypor\\WebService\\TypeExchangeStatus',
    'MissingMessages'                                   => 'Hypor\\WebService\\MissingMessages',
    'AnimalSynchronisations'                            => 'Hypor\\WebService\\AnimalSynchronisations',
    'TypegetExchangeStatusResponse'                     => 'Hypor\\WebService\\TypegetExchangeStatusResponse',
    'MissingMessagesToBeDelivered'                      => 'Hypor\\WebService\\MissingMessagesToBeDelivered',
    'MissingMessagesNotToBeDelivered'                   => 'Hypor\\WebService\\MissingMessagesNotToBeDelivered',
    'AnimalSynchronisationsToBeDelivered'               => 'Hypor\\WebService\\AnimalSynchronisationsToBeDelivered',
    'AnimalSynchronisationsNotToBeDelivered'            => 'Hypor\\WebService\\AnimalSynchronisationsNotToBeDelivered',
    'TypeputExchangeStatusAcknowledgementRequest'       => 'Hypor\\WebService\\TypeputExchangeStatusAcknowledgementRequest',
    'putExchangeStatusAcknowledgementResponse'          => 'Hypor\\WebService\\putExchangeStatusAcknowledgementResponse',
    'getMessageListRequestContainer'                    => 'Hypor\\WebService\\getMessageListRequestContainer',
    'getMessageListResponseContainer'                   => 'Hypor\\WebService\\getMessageListResponseContainer',
    'getMessageRequestContainer'                        => 'Hypor\\WebService\\getMessageRequestContainer',
    'getMessageResponseContainer'                       => 'Hypor\\WebService\\getMessageResponseContainer',
    'putMessageRequestContainer'                        => 'Hypor\\WebService\\putMessageRequestContainer',
    'putMessageResponseContainer'                       => 'Hypor\\WebService\\putMessageResponseContainer',
    'getExchangeStatusRequestContainer'                 => 'Hypor\\WebService\\getExchangeStatusRequestContainer',
    'getExchangeStatusResponseContainer'                => 'Hypor\\WebService\\getExchangeStatusResponseContainer',
    'putExchangeStatusAcknowledgementRequestContainer'  => 'Hypor\\WebService\\putExchangeStatusAcknowledgementRequestContainer',
    'putExchangeStatusAcknowledgementResponseContainer' => 'Hypor\\WebService\\putExchangeStatusAcknowledgementResponseContainer',
  ];

  /**
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct(array $options = [], $wsdl = NULL) {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $options = array_merge([
      'features' => 1,
    ], $options);
    if (!$wsdl) {
      $wsdl = __DIR__ . '../../../WSDL_WS-EDI-PIGS.wsdl';
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * @param getMessageListResponseContainer $payload
   *
   * @return getMessageListResponseContainer
   */
  public function requestMessageList(getMessageListResponseContainer $payload) {
    return $this->__soapCall('requestMessageList', [$payload]);
  }

  /**
   * @param getMessageRequestContainer $payload
   *
   * @return getMessageResponseContainer
   */
  public function requestMessage(getMessageRequestContainer $payload) {
    return $this->__soapCall('requestMessage', [$payload]);
  }

  /**
   * @param putMessageRequestContainer $payload
   *
   * @return putMessageResponseContainer
   */
  public function putMessage(putMessageRequestContainer $payload) {
    return $this->__soapCall('putMessage', [$payload]);
  }

  /**
   * @param getExchangeStatusRequestContainer $payload
   *
   * @return getExchangeStatusResponseContainer
   */
  public function requestExchangeStatus(getExchangeStatusRequestContainer $payload) {
    return $this->__soapCall('requestExchangeStatus', [$payload]);
  }

  /**
   * @param putExchangeStatusAcknowledgementRequestContainer $payload
   *
   * @return putExchangeStatusAcknowledgementResponseContainer
   */
  public function putExchangeStatusAcknowledgement(putExchangeStatusAcknowledgementRequestContainer $payload) {
    return $this->__soapCall('putExchangeStatusAcknowledgement', [$payload]);
  }

}
