<?php

/**
 * Fichier de configuration principal de l'application.
 *
 * Ce fichier retourne un tableau associatif contenant les paramètres
 * globaux de l'application.
 */

return [
    /*
    |--------------------------------------------------------------------------
    | URL de l'Application
    |--------------------------------------------------------------------------
    |
    | Cette URL est utilisée par la commande 'serve' pour démarrer le serveur
    | de développement. Elle peut être surchargée avec les options --host et --port.
    |
    | Exemple: http://localhost:8000
    |
    */
    'url' => env('APP_URL', 'http://127.0.0.1:8000'),

    /*
    |--------------------------------------------------------------------------
    | Nom de l'Application
    |--------------------------------------------------------------------------
    |
    | Le nom de votre application, utilisé dans les logs et messages.
    |
    */
    'name' => env('APP_NAME', 'You Framework'),

    /*
    |--------------------------------------------------------------------------
    | Environnement de l'Application
    |--------------------------------------------------------------------------
    |
    | Définit l'environnement d'exécution de l'application.
    | Valeurs possibles: dev, prod
    |
    */
    'env' => env('APP_ENV', 'dev'),

    /*
    |--------------------------------------------------------------------------
    | Mode Debug
    |--------------------------------------------------------------------------
    |
    | Active ou désactive le mode debug. En production, cette valeur
    | devrait toujours être false.
    |
    */
    'debug' => env('APP_DEBUG', false),

    'timezone' => env('APP_TIMEZONE','UTC'),
    'locale' => env('APP_LOCALE','en'),
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
