<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => '/HomeController.php',
    '/mention-legales' => '/MentionController.php',
    '/produit' => '/ProductController.php',
    '/login' => '/LoginController.php'
];

if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . '/../app/Controllers/' . $routes[$uri]);
} else {
    http_response_code(404);
    require_once(__DIR__ . '/../app/Controllers/404.php');
}
