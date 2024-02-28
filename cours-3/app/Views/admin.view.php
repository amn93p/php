<?php
$title = 'Admin';
require_once(__DIR__ . '/partials/head.php');
?>

<?php
    foreach ($users as $user) {
        echo '<li>'  . $user['email'] . ' - ' . $user['password'] . '</li>';
        echo "<a class='btn btn-danger' href='/admin-delete?id=" . $user['id'] . "'>Supprimer</a>";
    }
    ?>

<?php
require_once(__DIR__ . '/partials/footer.php');

?>