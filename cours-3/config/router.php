<?php

require_once('config/function.php');
require_once('config/db.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => '/HomeController.php',
    '/mention-legales' => '/MentionController.php',
    '/product' => '/ProductController.php',
    '/product-create' => '/ProductCreateController.php',
    '/product-delete' => '/ProductDeleteController.php',
    '/product-read' => '/ProductReadController.php',
    '/product-update' => '/ProductUpdateController.php',
    '/login' => '/LoginController.php',
    '/logout' => '/LogoutController.php',
    '/register' => '/RegisterController.php',
    '/admin' => '/AdminController.php',
    '/admin-delete' => '/AdminDeleteController.php',
    '/admin-update' => '/AdminUpdateController.php'
];

$securedRoutes = [
    '/admin' => 'AdminController.php',
    '/admin-update' => 'AdminUpdateController.php',
    '/admin-delete' => 'AdminDeleteController.php',
];

if (array_key_exists($uri, $securedRoutes)){
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] == 1){
        redirectToRoute('/login');
    }
}

if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . '/../app/Controllers/' . $routes[$uri]);
} else {
    http_response_code(404);
    require_once(__DIR__ . '/../app/Controllers/404.php');
}
