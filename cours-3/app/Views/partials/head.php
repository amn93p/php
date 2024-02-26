<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
    <title><?php if (isset($title))
                echo $title;
            ?></title>
</head>

<body>
    <ul class="nav justify-content-center bg-light gradient-custom">
        <a href="/"><img src="/public/img/logo.png" height="40" alt="Logo feuille"></a>
        <li class="nav-item">
            <a class="nav-link active text-light nav-link-hover " href="/" aria-current="page">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light nav-link-hover" href="/mention-legales">Mentions Légales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light nav-link-hover" href="/produit">Produit</a>
        </li>
        <?php
        // si la session user est démarré
        if (isset($_SESSION['user'])) { ?>
            <!-- alors on affiche le bouton logout -->
            <li class="nav-item">
                <a class="btn btn-light" href="logout">Logout</a>
            </li>
        <?php
        } else { ?>
            <!-- sinon on affiche le bouton login -->
            <li class="nav-item">
                <a class="btn gradient-custom text-light" href="login">Login</a>
            </li>
        <?php
        } ?>
    </ul>