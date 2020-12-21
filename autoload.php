<?php


function autoload_93ca17c40e3b42c23258d050c728e1d0($class) {
  $classes = [
    'Hypor\WebService\EdiService'                                        => __DIR__ . '/lib/Hypor/WebService/EdiService.php',
    'Hypor\WebService\TypeApplicationCode'                               => __DIR__ . '/lib/Hypor/WebService/TypeApplicationCode.php',
    'Hypor\WebService\TypeEdiVersion'                                    => __DIR__ . '/lib/Hypor/WebService/TypeEdiVersion.php',
    'Hypor\WebService\TypeIdentType'                                     => __DIR__ . '/lib/Hypor/WebService/TypeIdentType.php',
    'Hypor\WebService\TypeMessageCode'                                   => __DIR__ . '/lib/Hypor/WebService/TypeMessageCode.php',
    'Hypor\WebService\TypeAnimal'                                        => __DIR__ . '/lib/Hypor/WebService/TypeAnimal.php',
    'Hypor\WebService\TypeRelationId'                                    => __DIR__ . '/lib/Hypor/WebService/TypeRelationId.php',
    'Hypor\WebService\TypeStatus'                                        => __DIR__ . '/lib/Hypor/WebService/TypeStatus.php',
    'Hypor\WebService\TypeSynchronisationIndication'                     => __DIR__ . '/lib/Hypor/WebService/TypeSynchronisationIndication.php',
    'Hypor\WebService\TypeMessageHeader'                                 => __DIR__ . '/lib/Hypor/WebService/TypeMessageHeader.php',
    'Hypor\WebService\TypeMessageListRequestRelation'                    => __DIR__ . '/lib/Hypor/WebService/TypeMessageListRequestRelation.php',
    'Hypor\WebService\TypegetMessageListRequest'                         => __DIR__ . '/lib/Hypor/WebService/TypegetMessageListRequest.php',
    'Hypor\WebService\TypeMessageListResponseMessage'                    => __DIR__ . '/lib/Hypor/WebService/TypeMessageListResponseMessage.php',
    'Hypor\WebService\TypegetMessageListResponse'                        => __DIR__ . '/lib/Hypor/WebService/TypegetMessageListResponse.php',
    'Hypor\WebService\MessageList'                                       => __DIR__ . '/lib/Hypor/WebService/MessageList.php',
    'Hypor\WebService\getMessageRequest'                                 => __DIR__ . '/lib/Hypor/WebService/getMessageRequest.php',
    'Hypor\WebService\getMessageResponse'                                => __DIR__ . '/lib/Hypor/WebService/getMessageResponse.php',
    'Hypor\WebService\EdiMessage'                                        => __DIR__ . '/lib/Hypor/WebService/EdiMessage.php',
    'Hypor\WebService\putMessageRequest'                                 => __DIR__ . '/lib/Hypor/WebService/putMessageRequest.php',
    'Hypor\WebService\putMessageResponse'                                => __DIR__ . '/lib/Hypor/WebService/putMessageResponse.php',
    'Hypor\WebService\TypeExchangeStatusRequestRelation'                 => __DIR__ . '/lib/Hypor/WebService/TypeExchangeStatusRequestRelation.php',
    'Hypor\WebService\TypegetExchangeStatusRequest'                      => __DIR__ . '/lib/Hypor/WebService/TypegetExchangeStatusRequest.php',
    'Hypor\WebService\TypeExchangeStatus'                                => __DIR__ . '/lib/Hypor/WebService/TypeExchangeStatus.php',
    'Hypor\WebService\MissingMessages'                                   => __DIR__ . '/lib/Hypor/WebService/MissingMessages.php',
    'Hypor\WebService\AnimalSynchronisations'                            => __DIR__ . '/lib/Hypor/WebService/AnimalSynchronisations.php',
    'Hypor\WebService\TypegetExchangeStatusResponse'                     => __DIR__ . '/lib/Hypor/WebService/TypegetExchangeStatusResponse.php',
    'Hypor\WebService\MissingMessagesToBeDelivered'                      => __DIR__ . '/lib/Hypor/WebService/MissingMessagesToBeDelivered.php',
    'Hypor\WebService\MissingMessagesNotToBeDelivered'                   => __DIR__ . '/lib/Hypor/WebService/MissingMessagesNotToBeDelivered.php',
    'Hypor\WebService\AnimalSynchronisationsToBeDelivered'               => __DIR__ . '/lib/Hypor/WebService/AnimalSynchronisationsToBeDelivered.php',
    'Hypor\WebService\AnimalSynchronisationsNotToBeDelivered'            => __DIR__ . '/lib/Hypor/WebService/AnimalSynchronisationsNotToBeDelivered.php',
    'Hypor\WebService\TypeputExchangeStatusAcknowledgementRequest'       => __DIR__ . '/lib/Hypor/WebService/TypeputExchangeStatusAcknowledgementRequest.php',
    'Hypor\WebService\putExchangeStatusAcknowledgementResponse'          => __DIR__ . '/lib/Hypor/WebService/putExchangeStatusAcknowledgementResponse.php',
    'Hypor\WebService\getMessageListRequestContainer'                    => __DIR__ . '/lib/Hypor/WebService/getMessageListRequestContainer.php',
    'Hypor\WebService\getMessageListResponseContainer'                   => __DIR__ . '/lib/Hypor/WebService/getMessageListResponseContainer.php',
    'Hypor\WebService\getMessageRequestContainer'                        => __DIR__ . '/lib/Hypor/WebService/getMessageRequestContainer.php',
    'Hypor\WebService\getMessageResponseContainer'                       => __DIR__ . '/lib/Hypor/WebService/getMessageResponseContainer.php',
    'Hypor\WebService\putMessageRequestContainer'                        => __DIR__ . '/lib/Hypor/WebService/putMessageRequestContainer.php',
    'Hypor\WebService\putMessageResponseContainer'                       => __DIR__ . '/lib/Hypor/WebService/putMessageResponseContainer.php',
    'Hypor\WebService\getExchangeStatusRequestContainer'                 => __DIR__ . '/lib/Hypor/WebService/getExchangeStatusRequestContainer.php',
    'Hypor\WebService\getExchangeStatusResponseContainer'                => __DIR__ . '/lib/Hypor/WebService/getExchangeStatusResponseContainer.php',
    'Hypor\WebService\putExchangeStatusAcknowledgementRequestContainer'  => __DIR__ . '/lib/Hypor/WebService/putExchangeStatusAcknowledgementRequestContainer.php',
    'Hypor\WebService\putExchangeStatusAcknowledgementResponseContainer' => __DIR__ . '/lib/Hypor/WebService/putExchangeStatusAcknowledgementResponseContainer.php',
  ];
  if (!empty($classes[$class])) {
    include $classes[$class];
  };
}

spl_autoload_register('autoload_93ca17c40e3b42c23258d050c728e1d0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
