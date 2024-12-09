<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Dotenv\Dotenv;

// Charger les variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

use App\Core\Router;

$router = require __DIR__ . "/../src/App/Routes/web.php";
$router->dispatch($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);