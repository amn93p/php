<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a class="nav-link text-light nav-link-hover" href="/product">Liste de Produits</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light nav-link-hover" href="/product-create">Créer Produit</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light nav-link-hover" href="/admin">Admin</a>
        </li>
        <?php
        // si la session user est démarré
        if (isset($_SESSION['user'])) { ?>
            <!-- alors on affiche le bouton logout -->
            <li class="nav-item">
                <a class="btn btn-light" href="logout">Deconnexion</a>
            </li>
        <?php
        } else { ?>

            <!-- sinon on affiche le bouton login -->
            <li class="nav-item">
                <a class="btn gradient-custom text-light" href="login">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="btn gradient-custom text-light" href="register">Inscription</a>
            </li>

        <?php
        } ?>
                      
        
    </ul>