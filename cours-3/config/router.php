<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => '/HomeController.php',
    '/mention-legales' => '/MentionController.php',
    '/product' => '/ProductController.php',
    '/product-create' => '/ProductCreateController.php',
    '/product-delete' => '/ProductDeleteController.php',
    '/product-read' => '/ProductReadController.php',
    '/login' => '/LoginController.php',
    '/register' => '/RegisterController.php',
    '/admin' => '/AdminController.php',
    '/admin-delete' => '/AdminDeleteController.php'
];

if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . '/../app/Controllers/' . $routes[$uri]);
} else {
    http_response_code(404);
    require_once(__DIR__ . '/../app/Controllers/404.php');
}
