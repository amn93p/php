<?php

require_once(__DIR__ . '/../../config/db.php');

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price']) && $_POST['price'] > 0 && strlen($_POST['title']) > 2) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $productQuery = "INSERT INTO product (title,description,price) VALUES (:title, :description, :price)";

    $productStatement = $mysqlClient->prepare($productQuery);

    $productStatement->bindParam(':title', $title);
    $productStatement->bindParam(':description', $description);
    $productStatement->bindParam(':price', $price);

    $productStatement->execute();

    http_response_code(303);
    header('Location: /product');
    exit();
} else {
    echo "erreur";
}

require_once(__DIR__ . '/../Views/productCreate.view.php');
