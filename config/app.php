<?php

/**
 * Fichier de configuration principal de l'application.
 *
 * Ce fichier retourne un tableau associatif contenant les paramètres
 * globaux de l'application.
 */

return [
    'name' => 'YouFramework',
    'env' => 'dev', // development | production
    'debug' => true,
    'timezone' => env('TIMEZONE'),
    'locale' => 'en',
    'routes' => [
        'resource' => '/src/Controller'
    ],
    'commands' => [
        'resource' => '/src/Command'
    ],
    'twig' => [
        'path' => '/templates'
    ]
];
