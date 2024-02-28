<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $productQuery = "SELECT * FROM product WHERE id = :id";
    $productStatement = $mysqlClient->prepare($productQuery);
    $productStatement->bindParam(':id', $id);
    $productStatement->execute();
    $product = $productStatement->fetch();
}

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price']) && $_POST['price'] > 0 && strlen($_POST['title']) > 2) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $updateQuery = "UPDATE product SET title=:title , description=:description , price=:price WHERE id = :id";

    $updateStatement = $mysqlClient->prepare($updateQuery);

    $updateStatement->bindParam(':title', $title);
    $updateStatement->bindParam(':description', $description);
    $updateStatement->bindParam(':price', $price);
    $updateStatement->bindParam(':id', $id);
    $updateStatement->execute();

    redirectToRoute('/product');

    exit();
}


require_once(__DIR__ . '/../Views/product/productUpdate.view.php');
