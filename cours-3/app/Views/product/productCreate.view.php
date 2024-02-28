<?php
$title = 'Créer un produit';
require_once(__DIR__ . '/../partials/head.php');
?>

<div class="container space">
    <h1>Créer un produit</h1>
    <form action="/product-create" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <button type="submit" class="btn btn-success">Créer</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once(__DIR__ . '/../partials/footer.php');
?>