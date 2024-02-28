<?php
$title = 'Inscription';
require_once(__DIR__ . '/../partials/head.php');
?>

<h1>Modifier l'utilisateur</h1>

<form method="POST">
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input name="email" value="<?php echo $user['email'] ?>">
    </div>
    <button type="submit">Mettre à jour</button>
</form>

<?php
require_once(__DIR__ . '/../partials/footer.php');

?>