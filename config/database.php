<?php

/**
 * Fichier de configuration de la base de données.
 *
 * Ce fichier contient les paramètres de connexion pour différents systèmes
 * de gestion de base de données (SGBD). Vous pouvez définir la connexion
 * par défaut et configurer chaque driver individuellement.
 *
 * @author Hamza Hajjaji
 * @package you-framework/you-skeleton
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Nom de la connexion par défaut
    |--------------------------------------------------------------------------
    |
    | Ici, vous pouvez spécifier laquelle des connexions ci-dessous vous
    | souhaitez utiliser comme connexion par défaut pour tous vos travaux
    | sur la base de données.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Connexions à la base de données
    |--------------------------------------------------------------------------
    |
    | Voici chacune des connexions configurées pour votre application.
    | Des exemples de configuration sont fournis pour chaque système
    | pris en charge par le framework afin de simplifier le développement.
    |
    | Tous les travaux sur la base de données sont effectués via les drivers
    | PDO de PHP, assurez-vous donc d'avoir les extensions installées.
    |
    */

    'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', '3306'),
                'database' => env('DB_DATABASE', 'you_framework'),
                'username' => env('DB_USERNAME', 'root'),
                'password' => env('DB_PASSWORD', ''),
                'charset' => 'utf8mb4',
                'prefix' => '',
                'prefix_indexes' => true,
                'options' => []
            ],

            /*'sqlite' => [
                'driver' => 'sqlite',
                'database' => env('DB_DATABASE', ':memory:'),
                'prefix' => '',
            ],

            'pgsql' => [
                'driver' => 'pgsql',
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', '5432'),
                'database' => env('DB_DATABASE', 'you_framework'),
                'username' => env('DB_USERNAME', 'root'),
                'password' => env('DB_PASSWORD', ''),
                'charset' => 'utf8',
                'prefix' => '',
                'prefix_indexes' => true,
                'schema' => 'public',
                'sslmode' => 'prefer',
            ],

            'sqlsrv' => [
                'driver' => 'sqlsrv',
                'host' => env('DB_HOST', 'localhost'),
                'port' => env('DB_PORT', '1433'),
                'database' => env('DB_DATABASE', 'you_framework'),
                'username' => env('DB_USERNAME', 'root'),
                'password' => env('DB_PASSWORD', ''),
                'charset' => 'utf8',
                'prefix' => '',
                'prefix_indexes' => true,
            ],*/

    ],

    /*
    |--------------------------------------------------------------------------
    | Table des migrations
    |--------------------------------------------------------------------------
    |
    | Cette table conserve la trace de toutes les migrations qui ont déjà
    | été exécutées pour votre application. Grâce à ces informations,
    | nous savons lesquelles doivent être exécutées.
    |
    */

    'migrations_table' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Chemin des migrations
    |--------------------------------------------------------------------------
    |
    | Ce chemin est utilisé par la commande `migrate` pour localiser
    | les migrations.
    |
    */

    'migrations_path' => '/migrations'

    ,

    /*
    |--------------------------------------------------------------------------
    | Chemin des entités
    |--------------------------------------------------------------------------
    |
    | Ce chemin est utilisé pour localiser les entités de l'application.
    |
    */

    'entities_path' => '/src/Entity',

    /*
    |--------------------------------------------------------------------------
    | Chemin des repositories
    |--------------------------------------------------------------------------
    |
    | Ce chemin est utilisé pour localiser les repositories de l'application.
    |
    */

    'repositories_path' => '/src/Repository'

];
