<?php

/**
 * © 2024 Kamel Abbassi. Tous droits réservés.
 * Créé par Kamel Abbassi - www.linkedin.com/in/kamelabbassi
 */

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UserController;

$uri = $_SERVER['REQUEST_URI'];
$controller = new UserController();

if ($uri === '/' || $uri === '/index') {
    $controller->index();
} elseif ($uri === '/create') {
    $controller->create();
} elseif (preg_match('/\/edit\/(\d+)/', $uri, $matches)) {
    $controller->edit($matches[1]);
} elseif (preg_match('/\/delete\/(\d+)/', $uri, $matches)) {
    $controller->delete($matches[1]);
}
