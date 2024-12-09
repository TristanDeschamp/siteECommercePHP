<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Dotenv\Dotenv;

// Charger les variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

require_once __DIR__ . "/../src/App/Config/db.php";

try {
	$db = Database::getInstance();
	echo "Connexion réussi à la base de données.";
} catch (PDOException $e) {
	echo "Erreur : " . $e->getMessage();
}