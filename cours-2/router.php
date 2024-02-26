<?php


// fonction qui permet de recuperer juste l'url
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// le tableau de routage

$routes = [
    '/' => '/home.php',
    '/recherche' => '/recherche.php',
    '/login' => '/login.php',
    '/logout' => '/logout.php',
    '/contact' => '/contact.php',
    '/livraison' => '/livraison.php',
];

// $uri = "/home";
// array_key_exists('/home', $routes) , si il le trouve il me donne comme reponse
// true sinon il me reponds false
// if (true) { require_once(__DIR__. '/home.php')}

// la condition qui retourne un fichier si la route existe
if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . $routes[$uri]);
} else {
    require_once(__DIR__ . '/404.php');
}
