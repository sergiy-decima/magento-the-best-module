<?php

return [
    'db-host' => $_SERVER['INPUT_DB_HOST'],
    'db-user' => $_SERVER['INPUT_DB_USER'],
    'db-password' => $_SERVER['INPUT_DB_PASSWORD'],
    'db-name' => $_SERVER['INPUT_DB_NAME'],
    'db-prefix' => '',
    'backend-frontname' => 'backend',
    'search-engine' => 'opensearch',
    'opensearch-host' => $_SERVER['INPUT_OPENSEARCH_HOST'],
    'opensearch-port' => $_SERVER['INPUT_OPENSEARCH_PORT'],
    'admin-user' => \Magento\TestFramework\Bootstrap::ADMIN_NAME,
    'admin-password' => \Magento\TestFramework\Bootstrap::ADMIN_PASSWORD,
    'admin-email' => \Magento\TestFramework\Bootstrap::ADMIN_EMAIL,
    'admin-firstname' => \Magento\TestFramework\Bootstrap::ADMIN_FIRSTNAME,
    'admin-lastname' => \Magento\TestFramework\Bootstrap::ADMIN_LASTNAME,
    'amqp-host' => $_SERVER['INPUT_AMQP_HOST'],
    'amqp-port' => $_SERVER['INPUT_AMQP_PORT'],
    'amqp-user' => $_SERVER['INPUT_AMQP_USER'],
    'amqp-password' => $_SERVER['INPUT_AMQP_PASSWORD'],
    'consumers-wait-for-messages' => '0',
];
