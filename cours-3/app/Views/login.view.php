<?php
$title = 'Connexion';
require_once(__DIR__ . '/partials/head.php');
?>

<?php
    foreach ($users as $user) {
        echo '<li>' . $user['id'] . ' - ' . $user['email'] . ' - ' . $user['password'] . '</li>';
    }
    ?>

<?php
require_once(__DIR__ . '/partials/footer.php');

?>