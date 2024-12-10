<?php

use App\Core\Router;
use App\Controller\HomeController;
use App\Controller\ProductController;
use App\Controller\CartController;

$router = new Router();

// Route pour la page d'accueil
$router->add("GET", "/", [HomeController::class, "index"]);

// Routes pour les produits
$router->add("GET", "/products", [ProductController::class, "list"]);
$router->add("GET", "/product/{id}", [ProductController::class, "detail"]);

// Routes pour le panier
$router->add("GET", "/cart", [CartController::class, "index"]);
$router->add("POST", "/cart/add", [CartController::class, "add"]);
$router->add("POST", "/cart/remove", [CartController::class, "remove"]);

return $router;