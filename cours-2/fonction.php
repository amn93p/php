<?php


function ShowActiveProducts($products)
{
    $activeProducts = [];
    foreach ($products as $product) {
        if ($product['is_enabled']) {
            $activeProducts[] = $product;
        }
    }
    return $activeProducts;
}
function getProducts($products)
{
    foreach ($products as $product) {
        echo "Nom : " . $product['nom'] . "<br>";
        echo "Prix : " . $product['prix'] . "<br>";
        echo "Statut : " . ($product['is_enabled'] ? "Activé" : "Désactivé") . "<br><br>";
    }
}
function isActiveProduct($product)
{
    if (array_key_exists('is_enabled', $product)) {
        $isEnabled = $product['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}
function getUsers($users)
{
    foreach ($users as $user) {
        echo "Nom: " . $user['name'] . "<br>";
        echo "Email: " . $user['email'] . "<br>";
        echo "Age: " . $user['age'] . "<br><br>";
    }
}
