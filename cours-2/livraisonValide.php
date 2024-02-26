<?php
session_start();
// var_dump($_GET['message']);
// $_GET['email']
//
?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once(__DIR__ . "/partials/head.php") ?>

<h1>Livraison validée</h1>

<?php if (
    !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['postal']) || !isset($_POST['adresse']) || !isset($_POST['ville']) || !isset($_POST['telephone']) || !isset($_POST['pays']) ||
    empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['postal']) || empty($_POST['adresse']) || empty($_POST['ville']) || empty($_POST['telephone']) || empty($_POST['pays'])
) {
    echo "<h2>Veuillez remplir le formulaire</h2>";
?>

    <div>
        <h2>votre nom</h2>
        <p><?php echo $_POST["nom"] ?></p>
    </div>

    <div>
        <h2>votre prénom</h2>
        <p><?php echo $_POST["prenom"] ?></p>
    </div>

    <div>
        <h2>votre code postal</h2>
        <p><?php echo $_POST["code_postal"] ?></p>
    </div>

    <div>
        <h2>votre ville</h2>
        <p><?php echo $_POST["ville"] ?></p>
    </div>

    <div>
        <h2>votre pays</h2>
        <p><?php echo $_POST["pays"] ?></p>
    </div>

    <div>
        <h2>votre téléphone</h2>
        <p><?php echo $_POST["telephone"] ?></p>
    </div>

<?php } else { ?> remplissez le formulaire
<?php } ?>

<?php require_once(__DIR__ . "/partials/footer.php") ?>