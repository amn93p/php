<?php

//on verifie que le formulaire a été envoyé
if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['password'])
) {
    //on met les informations du formulaire dans des variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "E-mail invalide";
        require_once(__DIR__ . '/../Views/security/register.view.php');
        exit;
    }

    //je recupere mes utilisateurs en base de donnee et je les met dans la variable user
    $userQuery = "SELECT * FROM user WHERE email = :email";
    $userStatement = $mysqlClient->prepare($userQuery);
    $userStatement->bindParam(':email', $email);
    $userStatement->execute();
    // quand l'element est unique on utilise fetch et non fetchAll
    $user = $userStatement->fetch();
    if ($user) {
        $error = 'Email deja existant';
    } else {
        $passwordValid = preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password);
        if ($passwordValid) {
            $userQuery = "INSERT INTO user (name,email,password) VALUES (:name, :email, :password)";

            $userStatement = $mysqlClient->prepare($userQuery);

            $userStatement->bindParam(':name', $name);
            $userStatement->bindParam(':email', $email);
            $userStatement->bindParam(':password', $password);

            $userStatement->execute();
            redirectToRoute('/login');
        } else {
            $error = "
- Au moins 8 caractères <br>
- Au moins une lettre majuscule <br>
- Au moins une lettre minuscule <br>
- Au moins un chiffre <br>
- Au moins un caractère spécial <br>
            ";
        }
    }
}

require_once(__DIR__ . '/../Views/security/register.view.php');
