<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db'     => [
            'class' => 'yii\db\Connection', 
            'dsn'      => 'pgsql:host=zhuk.ru;port=5433;dbname=zhuk_football',
            'username' => 'postgres',
            'password' => 'postgres',
        ],
    ],
];
