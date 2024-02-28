<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $productQuery = "DELETE FROM product WHERE id = :id";

    $productStatement = $mysqlClient->prepare($productQuery);

    $productStatement->bindParam(':id', $id);
    $productStatement->execute();

    redirectToRoute('/product');
} else {
    http_response_code(404);
    require_once(__DIR__ . "/404.php");
    exit;
}
