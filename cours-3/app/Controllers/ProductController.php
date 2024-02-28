<?php

// j'écris ma requete sql que je met dans une variable
$productQuery = "SELECT * FROM product";

// puis je prepare ma requete
$productStatement = $mysqlClient->prepare($productQuery);
// j'execute la requete
$productStatement->execute();
// je recupere le resultat de la requete dans une variable
$products = $productStatement->fetchAll();

require_once(__DIR__ . '/../Views/product/product.view.php');
