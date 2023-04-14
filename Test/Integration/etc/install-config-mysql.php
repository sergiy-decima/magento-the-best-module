<?php

return [
    'db-host' => $_ENV['DB_HOST'],
    'db-user' => $_ENV['DB_USER'],
    'db-password' => $_ENV['DB_PASSWORD'],
    'db-name' => $_ENV['DB_NAME'],
    'db-prefix' => '',
    'backend-frontname' => 'backend',
    'search-engine' => 'opensearch',
    'opensearch-host' => $_ENV['OPENSEARCH_HOST'],
    'opensearch-port' => $_ENV['OPENSEARCH_PORT'],
    'admin-user' => \Magento\TestFramework\Bootstrap::ADMIN_NAME,
    'admin-password' => \Magento\TestFramework\Bootstrap::ADMIN_PASSWORD,
    'admin-email' => \Magento\TestFramework\Bootstrap::ADMIN_EMAIL,
    'admin-firstname' => \Magento\TestFramework\Bootstrap::ADMIN_FIRSTNAME,
    'admin-lastname' => \Magento\TestFramework\Bootstrap::ADMIN_LASTNAME,
    'amqp-host' => $_ENV['AMQP_HOST'],
    'amqp-port' => $_ENV['AMQP_PORT'],
    'amqp-user' => $_ENV['AMQP_USER'],
    'amqp-password' => $_ENV['AMQP_PASSWORD'],
    'consumers-wait-for-messages' => '0',
];
