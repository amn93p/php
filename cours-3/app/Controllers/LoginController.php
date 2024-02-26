<?php

try {

    $mysqlClient = new PDO('mysql:host=localhost;dbname=plante-et-co;charset=utf8', 'root');
} catch (Exception $e) {
    die('ERREUR : ' . $e->getMessage());
}

$userQuery = "SELECT * FROM user";

$userStatement = $mysqlClient->prepare($userQuery);

$userStatement->execute();

$users = $userStatement->fetchAll();

require_once(__DIR__.'/../Views/login.view.php');