<?php

/**
 * @param $class
 */
function autoload_18c1fc97dec67e464d07a53d759e7c57($class) {
  $classes = [
    'Hypor\TestWebService\EdiPigsTestWebservice'                     => __DIR__ . '/src/Hypor/TestWebService/EdiPigsTestWebservice.php',
    'Hypor\TestWebService\getMessageRequest'                         => __DIR__ . '/src/Hypor/TestWebService/getMessageRequest.php',
    'Hypor\TestWebService\getMessageResponse'                        => __DIR__ . '/src/Hypor/TestWebService/getMessageResponse.php',
    'Hypor\TestWebService\EdiMessage'                                => __DIR__ . '/src/Hypor/TestWebService/EdiMessage.php',
    'Hypor\TestWebService\putMessageResponse'                        => __DIR__ . '/src/Hypor/TestWebService/putMessageResponse.php',
    'Hypor\TestWebService\getMessageListRequestContainer'            => __DIR__ . '/src/Hypor/TestWebService/getMessageListRequestContainer.php',
    'Hypor\TestWebService\TypegetMessageListRequest'                 => __DIR__ . '/src/Hypor/TestWebService/TypegetMessageListRequest.php',
    'Hypor\TestWebService\TypeMessageListRequestRelation'            => __DIR__ . '/src/Hypor/TestWebService/TypeMessageListRequestRelation.php',
    'Hypor\TestWebService\TypeRelationId'                            => __DIR__ . '/src/Hypor/TestWebService/TypeRelationId.php',
    'Hypor\TestWebService\getMessageListRequestContainerResponse'    => __DIR__ . '/src/Hypor/TestWebService/getMessageListRequestContainerResponse.php',
    'Hypor\TestWebService\TypegetMessageListResponse'                => __DIR__ . '/src/Hypor/TestWebService/TypegetMessageListResponse.php',
    'Hypor\TestWebService\MessageList'                               => __DIR__ . '/src/Hypor/TestWebService/MessageList.php',
    'Hypor\TestWebService\TypeStatus'                                => __DIR__ . '/src/Hypor/TestWebService/TypeStatus.php',
    'Hypor\TestWebService\TypeMessageListResponseMessage'            => __DIR__ . '/src/Hypor/TestWebService/TypeMessageListResponseMessage.php',
    'Hypor\TestWebService\getMessageRequestContainer'                => __DIR__ . '/src/Hypor/TestWebService/getMessageRequestContainer.php',
    'Hypor\TestWebService\getMessageRequestContainerResponse'        => __DIR__ . '/src/Hypor/TestWebService/getMessageRequestContainerResponse.php',
    'Hypor\TestWebService\putMessageRequestContainer'                => __DIR__ . '/src/Hypor/TestWebService/putMessageRequestContainer.php',
    'Hypor\TestWebService\TypeputMessageRequest'                     => __DIR__ . '/src/Hypor/TestWebService/TypeputMessageRequest.php',
    'Hypor\TestWebService\typeEdiMessage'                            => __DIR__ . '/src/Hypor/TestWebService/typeEdiMessage.php',
    'Hypor\TestWebService\putMessageRequestContainerResponse'        => __DIR__ . '/src/Hypor/TestWebService/putMessageRequestContainerResponse.php',
    'Hypor\TestWebService\getExchangeStatusRequestContainer'         => __DIR__ . '/src/Hypor/TestWebService/getExchangeStatusRequestContainer.php',
    'Hypor\TestWebService\TypegetExchangeStatusRequest'              => __DIR__ . '/src/Hypor/TestWebService/TypegetExchangeStatusRequest.php',
    'Hypor\TestWebService\TypeExchangeStatusRequestRelation'         => __DIR__ . '/src/Hypor/TestWebService/TypeExchangeStatusRequestRelation.php',
    'Hypor\TestWebService\getExchangeStatusRequestContainerResponse' => __DIR__ . '/src/Hypor/TestWebService/getExchangeStatusRequestContainerResponse.php',
    'Hypor\TestWebService\TypegetExchangeStatusResponse'             => __DIR__ . '/src/Hypor/TestWebService/TypegetExchangeStatusResponse.php',
    'Hypor\TestWebService\TypeExchangeStatus'                        => __DIR__ . '/src/Hypor/TestWebService/TypeExchangeStatus.php',
    'Hypor\TestWebService\MissingMessages'                           => __DIR__ . '/src/Hypor/TestWebService/MissingMessages.php',
    'Hypor\TestWebService\AnimalSynchronisations'                    => __DIR__ . '/src/Hypor/TestWebService/AnimalSynchronisations.php',
    'Hypor\TestWebService\TypeSynchronisationIndication'             => __DIR__ . '/src/Hypor/TestWebService/TypeSynchronisationIndication.php',
    'Hypor\TestWebService\TypeAnimal'                                => __DIR__ . '/src/Hypor/TestWebService/TypeAnimal.php',
    'Hypor\TestWebService\TypeIdentType'                             => __DIR__ . '/src/Hypor/TestWebService/TypeIdentType.php',

    'Hypor\WebService\EdiPigsWebservice'                         => __DIR__ . '/src/Hypor/WebService/EdiPigsWebservice.php',
    'Hypor\WebService\getMessageRequest'                         => __DIR__ . '/src/Hypor/WebService/getMessageRequest.php',
    'Hypor\WebService\getMessageResponse'                        => __DIR__ . '/src/Hypor/WebService/getMessageResponse.php',
    'Hypor\WebService\EdiMessage'                                => __DIR__ . '/src/Hypor/WebService/EdiMessage.php',
    'Hypor\WebService\putMessageResponse'                        => __DIR__ . '/src/Hypor/WebService/putMessageResponse.php',
    'Hypor\WebService\putMessageRequestContainer'                => __DIR__ . '/src/Hypor/WebService/putMessageRequestContainer.php',
    'Hypor\WebService\TypeputMessageRequest'                     => __DIR__ . '/src/Hypor/WebService/TypeputMessageRequest.php',
    'Hypor\WebService\typeEdiMessage'                            => __DIR__ . '/src/Hypor/WebService/typeEdiMessage.php',
    'Hypor\WebService\TypeRelationId'                            => __DIR__ . '/src/Hypor/WebService/TypeRelationId.php',
    'Hypor\WebService\putMessageRequestContainerResponse'        => __DIR__ . '/src/Hypor/WebService/putMessageRequestContainerResponse.php',
    'Hypor\WebService\TypeStatus'                                => __DIR__ . '/src/Hypor/WebService/TypeStatus.php',
    'Hypor\WebService\getExchangeStatusRequestContainer'         => __DIR__ . '/src/Hypor/WebService/getExchangeStatusRequestContainer.php',
    'Hypor\WebService\TypegetExchangeStatusRequest'              => __DIR__ . '/src/Hypor/WebService/TypegetExchangeStatusRequest.php',
    'Hypor\WebService\TypeExchangeStatusRequestRelation'         => __DIR__ . '/src/Hypor/WebService/TypeExchangeStatusRequestRelation.php',
    'Hypor\WebService\getExchangeStatusRequestContainerResponse' => __DIR__ . '/src/Hypor/WebService/getExchangeStatusRequestContainerResponse.php',
    'Hypor\WebService\TypegetExchangeStatusResponse'             => __DIR__ . '/src/Hypor/WebService/TypegetExchangeStatusResponse.php',
    'Hypor\WebService\TypeExchangeStatus'                        => __DIR__ . '/src/Hypor/WebService/TypeExchangeStatus.php',
    'Hypor\WebService\MissingMessages'                           => __DIR__ . '/src/Hypor/WebService/MissingMessages.php',
    'Hypor\WebService\AnimalSynchronisations'                    => __DIR__ . '/src/Hypor/WebService/AnimalSynchronisations.php',
    'Hypor\WebService\TypeSynchronisationIndication'             => __DIR__ . '/src/Hypor/WebService/TypeSynchronisationIndication.php',
    'Hypor\WebService\TypeAnimal'                                => __DIR__ . '/src/Hypor/WebService/TypeAnimal.php',
    'Hypor\WebService\getMessageListRequestContainer'            => __DIR__ . '/src/Hypor/WebService/getMessageListRequestContainer.php',
    'Hypor\WebService\TypegetMessageListRequest'                 => __DIR__ . '/src/Hypor/WebService/TypegetMessageListRequest.php',
    'Hypor\WebService\TypeMessageListRequestRelation'            => __DIR__ . '/src/Hypor/WebService/TypeMessageListRequestRelation.php',
    'Hypor\WebService\getMessageListRequestContainerResponse'    => __DIR__ . '/src/Hypor/WebService/getMessageListRequestContainerResponse.php',
    'Hypor\WebService\TypegetMessageListResponse'                => __DIR__ . '/src/Hypor/WebService/TypegetMessageListResponse.php',
    'Hypor\WebService\MessageList'                               => __DIR__ . '/src/Hypor/WebService/MessageList.php',
    'Hypor\WebService\TypeMessageListResponseMessage'            => __DIR__ . '/src/Hypor/WebService/TypeMessageListResponseMessage.php',
    'Hypor\WebService\getMessageRequestContainer'                => __DIR__ . '/src/Hypor/WebService/getMessageRequestContainer.php',
    'Hypor\WebService\getMessageRequestContainerResponse'        => __DIR__ . '/src/Hypor/WebService/getMessageRequestContainerResponse.php',
    'Hypor\WebService\TypeIdentType'                             => __DIR__ . '/src/Hypor/WebService/TypeIdentType.php',
  ];

  if (!empty($classes[$class])) {
    include $classes[$class];
  };
}

spl_autoload_register('autoload_18c1fc97dec67e464d07a53d759e7c57');

// Do nothing. The rest is just leftovers from the code generation.
{
}
