<?php

use App\Core\Router;
use App\Controller\HomeController;
use App\Controller\ProductController;

$router = new Router();

// Route pour la page d'accueil
$router->add("GET", "/", [HomeController::class, "index"]);

// Routes pour les produits
$router->add("GET", "/products", [ProductController::class, "list"]);
$router->add("GET", "/product/{id}", [ProductController::class, "detail"]);

return $router;