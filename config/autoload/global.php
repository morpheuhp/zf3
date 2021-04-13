<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return [
    'db' => [
        'driver' => 'Pdo_Mysql',
        'host' => '127.0.0.1',
        'database' => 'zf3_helpdesk',
        'username' => 'zend',
        'password' => 'dev123'
    ],
    'mail' => [
        'name' => 'smtp.mailtrap.io',
        'host' => 'smtp.mailtrap.io',
        'port' => 2525,
        'connection_class' => 'crammd5',
        'connection_config' => array(
            'from' => 'testeZend@zendf.com.br',
            'username' => 'bc5855cf4b0e38',
            'password' => '06a3f9d7bddf92',
        )
    ]
];
