<?php
$title = 'Modifier produit';
require_once(__DIR__ . '/../partials/head.php');
?>

<h1>Modifier le produit</h1>

<form method="POST">
    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" value="<?php echo $product['title'] ?>">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10"><?php echo $product['description'] ?></textarea>
    </div>
    <div>
        <label for="price">Prix</label>
        <input type="number" name="price" value="<?php echo $product['price'] ?>">
    </div>
    <button type="submit">Mettre à jour</button>
</form>

<?php
require_once(__DIR__ . '/../partials/footer.php');

?>