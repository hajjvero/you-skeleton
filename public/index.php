<?php

/**
 * Point d'entrée public de l'application.
 *
 * Toutes les requêtes web sont dirigées vers ce fichier par le serveur web.
 * Il charge l'autoloader de Composer, initialise l'application via le bootstrap
 * et exécute le traitement de la requête HTTP.
 *
 * @package YouSkeleton
 * @license MIT
 */

declare(strict_types=1);

use YouKernel\Application;

/*
|--------------------------------------------------------------------------
| Vérification de l'autoloader
|--------------------------------------------------------------------------
|
| On vérifie que les dépendances ont bien été installées via Composer.
| Si ce n'est pas le cas, on arrête l'exécution avec un message d'erreur.
|
*/

if (!file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    die('Veuillez installer les dépendances du projet via la commande `composer install`.');
}

// Chargement de l'autoloader de Composer
require_once dirname(__DIR__) . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Démarrage de l'application
|--------------------------------------------------------------------------
|
| On récupère l'instance de l'application déjà configurée depuis le fichier
| de bootstrap. Cette instance est prête à recevoir la requête.
|
*/

if (!file_exists(dirname(__DIR__) . '/bootstrap/app.php')) {
    die('Veuillez configurer l\'application via le fichier `bootstrap/app.php`.');
}

/** @var Application $app */
$app = require dirname(__DIR__) . '/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Exécution de la requête
|--------------------------------------------------------------------------
|
| On lance le traitement de la requête HTTP. L'application va analyser
| la requête, la router vers le bon contrôleur et renvoyer la réponse.
|
*/

$app->runHttp();
