<?php


$userQuery = "SELECT * FROM user";

$userStatement = $mysqlClient->prepare($userQuery);

$userStatement->execute();

$users = $userStatement->fetchAll();

require_once(__DIR__.'/../Views/admin/admin.view.php');