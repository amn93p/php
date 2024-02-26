<?php
$title = 'Produits';
require_once(__DIR__ . '/partials/head.php');
?>

<h1>Page Produit</h1>

<ul>

    <?php
    foreach ($products as $product) {
        echo '<li>' . $product['title'] . ' - ' . $product['description'] . ' - ' . $product['price'] . '€</li>';
    }
    ?>

</ul>

<?php
require_once(__DIR__ . '/partials/footer.php');

?>