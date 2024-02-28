<?php

require_once(__DIR__. '/../../config/db.php');

if (isset($_GET['id'])) {
    $id= $_GET['id'];

    $productQuery = "SELECT * FROM product WHERE id = :id";
    $productStatement  = $mysqlClient->prepare($productQuery);
    $productStatement->bindParam(':id', $id);
    $productStatement->execute();
    $product = $productStatement->fetch();

    if (!$product){
        http_response_code(404);
        require_once(__DIR__ . "/404.php");
        exit;
    }
}
else{
    http_response_code(404);
    require_once(__DIR__."/404.php");
    exit;
}

require_once(__DIR__ . '/../Views/productRead.view.php');