<?php
$title = 'Admin';
require_once(__DIR__ . '/../partials/head.php');
?>

<h1>Gestion d'utilisateur</h1>

<?php
    foreach ($users as $user) {
        echo '<li>'  . $user['name']. ' - ' .$user['email']  . '</li>';
        echo "<a class='btn btn-danger' href='/admin-delete?id=" . $user['id'] . "'>Supprimer</a>";
        echo "<a class='btn btn-warning' href='/admin-update?id=" . $user['id'] . "'>Modifier</a>";
    }
    ?>

<?php
require_once(__DIR__ . '/../partials/footer.php');

?>