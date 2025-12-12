<?php

/**
 * Bootstrap de la console.
 *
 * Ce fichier initialise l'instance de l'application YouSkeleton en mode console.
 * Il configure le chemin racine et prépare l'application à recevoir
 * et traiter les commandes CLI via le système de console.
 *
 * @package YouSkeleton
 * @license MIT
 */

declare(strict_types=1);

use YouKernel\Application;

/*
|--------------------------------------------------------------------------
| Création de l'instance de l'Application Console
|--------------------------------------------------------------------------
|
| Nous créons ici une nouvelle instance de la classe Application en mode console.
| Cette instance sert de conteneur de services et de noyau pour
| le framework, permettant l'exécution de commandes CLI personnalisées.
|
*/

try {
    // Instanciation de l'application avec le chemin racine du projet
    // Retourne l'instance de l'application au script appelant (ex: you)
    return new Application(dirname(__DIR__))
        ->withCommandPath(__DIR__ . '/src/Command')
        ;
} catch (ReflectionException $e) {
    // Gestion des erreurs critiques lors de l'initialisation (ex: problèmes d'injection de dépendances)
    throw new RuntimeException(
        message: "Erreur critique lors du démarrage de la console : " . $e->getMessage(),
        code: (int) $e->getCode(),
        previous: $e
    );
}