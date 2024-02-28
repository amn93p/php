<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $userQuery = "DELETE FROM user WHERE id = :id";

    $userStatement = $mysqlClient->prepare($userQuery);

    $userStatement->bindParam(':id', $id);
    $userStatement->execute();

    redirectToRoute('/admin');
} else {
    http_response_code(404);
    require_once(__DIR__ . "/404.php");
    exit;
}
