<?php
session_start();
// var_dump($_GET['message']);
// $_GET['email']
//
?>

<?php require_once(__DIR__ . "/partials/head.php") ?>

<h1>Page de validation formulaire</h1>

<?php if ($_GET !== []) { ?>


    <div>
        <h2>votre email</h2>
        <p><?php echo $_GET["email"] ?></p>
    </div>

    <div>
        <h2>votre message</h2>
        <p><?php echo $_GET["message"] ?></p>
    </div>

<?php } else { ?> remplissez le formulaire de contact
<?php } ?>

<?php require_once(__DIR__ . "/partials/footer.php") ?>