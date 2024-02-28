<?php
$title = "Product Read";

require_once(__DIR__ . "/../partials/head.php");
?>

<h1>Informations produit</h1>

<?php
echo $product['title'] . '-' . $product['description'] . '-' . $product['price'];
?>

<?php
require_once(__DIR__ . "/../partials/footer.php");
