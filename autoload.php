<?php

/**
 * @param $class
 */
function autoload_18c1fc97dec67e464d07a53d759e7c57($class) {
  $classes = [
    'Hypor\WebService\EdiPigsTestWebservice'                     => __DIR__ . '/src/Hypor/WebService/EdiPigsTestWebservice.php',
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
