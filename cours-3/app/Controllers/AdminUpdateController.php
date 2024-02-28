<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $userQuery = "SELECT * FROM user WHERE id = :id";
    $userStatement = $mysqlClient->prepare($userQuery);
    $userStatement->bindParam(':id', $id);
    $userStatement->execute();
    $user = $userStatement->fetch();
}

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $updateQuery = "UPDATE user SET name=:name , email=:email WHERE id = :id";

    $updateStatement = $mysqlClient->prepare($updateQuery);

    $updateStatement->bindParam(':name', $name);
    $updateStatement->bindParam(':email', $email);
    $updateStatement->bindParam(':id', $id);
    $updateStatement->execute();

    redirectToRoute('/admin');
}


require_once(__DIR__ . '/../Views/admin/adminUpdate.view.php');
