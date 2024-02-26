<?php 
session_start();
require_once(__DIR__ . "/partials/head.php") ?>

<h1> Resultat de la recherche</h1>

<?php if (!isset($_GET['recherche'])) {
    echo "probleme";
} else {
?>
    <div>
        <h2>contenu de la recherche</h2>
        <p> <?php echo $_GET['recherche'] ?></p>
    </div>
    <div>
        <h2>type de tri</h2>
        <p> <?php echo $_GET['tri'] ?></p>
    </div>
    <div>
        <h2>recherche globale ?</h2>
        <p>
            <?php if (isset($_GET['globale'])) {
                echo 'oui';
            } else {
                echo 'non';
            } ?>
        </p>
    </div>




<?php } ?>

<?php require_once(__DIR__ . '/partials/footer.php') ?>