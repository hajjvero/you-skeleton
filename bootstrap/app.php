<?php

/**
 * Bootstrap de l'application.
 *
 * Ce fichier initialise l'instance de l'application YouSkeleton.
 * Il configure le chemin racine et prépare l'application à recevoir
 * et traiter les requêtes (HTTP ou CLI).
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
| Création de l'instance de l'Application
|--------------------------------------------------------------------------
|
| Nous créons ici une nouvelle instance de la classe Application.
| Cette instance sert de conteneur de services et de noyau pour
| le framework, liant tous les composants ensemble.
|
*/

try {
    // Instanciation de l'application avec le chemin racine du projet
    // Retourne l'instance de l'application au script appelant (ex: public/index.php ou you)
    return new Application(dirname(__DIR__));

} catch (ReflectionException $e) {
    // Gestion des erreurs critiques lors de l'initialisation (ex: problèmes d'injection de dépendances)
    throw new RuntimeException(
        message: "Erreur critique lors du démarrage de l'application : " . $e->getMessage(),
        code: (int) $e->getCode(),
        previous: $e
    );
}
