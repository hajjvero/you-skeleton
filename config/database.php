<?php

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'you_framework',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8mb4',
        ],
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => ':memory:',
        ],
    ],
];
