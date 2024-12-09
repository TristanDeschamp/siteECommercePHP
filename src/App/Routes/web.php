<?php

use App\Core\Router;
use App\Controller\HomeController;

$router = new Router();

// Route pour la page d'accueil
$router->add("GET", "/", [HomeController::class, "index"]);

return $router;