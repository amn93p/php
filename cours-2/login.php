<?php
session_start();
    
$title = 'Login';
require_once(__DIR__ . "/variable.php");

//on commence par verifier si email et password existe dans la superglobale
if (isset($_POST['email']) && isset($_POST['password'])) {
    //ensuite on verifie si l'information dans l'email est bien sous la forme d'un email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // si c'est pas le cas on affiche un format d'erreur
        $errorMessage = "Erreur sur le formulaire";
    } else {
        //si c'est le cas on parcours le tableau des utilisateurs qui provient des variables
        // puis si l'email existe dans le tableau on verifie que le mot de passe correspond
        foreach ($users as $user) {
            if ($user['email'] === $_POST['email'] && $user['password'] === $_POST['password']) {
                //si c'est le cas on affiche a l'utilisateur un message de validation
                // echo "Vous êtes connecté";
                // // j'arrête le code si on a trouvé l'utilisateur car ça sert à rien de continuer la boucle
                // return;

                $_SESSION['user'] = $user['email'];

                header('Location: /');
            }
        }
        //si aucun utilisateur est trouve alors on met un autre message dans l'erreur
        $errorMessage = "Email ou mot de passe incorrect";
    }
}
?>

<?php require_once(__DIR__ . "/partials/head.php") ?>

<?php require_once(__DIR__ . "/views/login.view.php") ?>


<?php require_once(__DIR__ . "/partials/footer.php") ?>