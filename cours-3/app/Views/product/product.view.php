<?php
$title = 'Produits';
require_once(__DIR__ . '/../partials/head.php');
?>

<h1>Liste des produits</h1>

<table>
    <tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>

    <?php
    foreach ($products as $product) {
        echo '<tr>';
        echo '<td>' . $product['title'] . '</td>';
        echo '<td>' . $product['description'] . '</td>';
        echo '<td>' . $product['price'] . '€</td>';
        echo '<td>';
        echo "<a class='btn btn-danger' href='/product-delete?id=" . $product['id'] . "'>Supprimer</a>";
        echo "<a class='btn btn-warning' href='/product-update?id=" . $product['id'] . "'>Modifier</a>";
        echo "<a class='btn btn-primary' href='/product-read?id=" . $product['id'] . "'>Voir</a>";
        echo '</td>';
        echo '</tr>';
    }
    ?>

</table>

<?php
require_once(__DIR__ . '/../partials/footer.php');
?>
