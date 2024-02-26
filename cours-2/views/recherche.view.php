<?php
session_start();
$title = 'Recherche';
require_once(__DIR__ . "/../partials/head.php") ?>

<div class="card mt-4" style="margin-left:400px;margin-right:400px;">
    <div class="card-body text-center" >
        <form action="rechercheResultat.php" style="max-width: 400px; margin: 0 auto;">
            <div class="form-group">
                <h1 class="display-5">Page de recherche</h1>
                <label for="recherche">Recherche</label>
                <input type="text" name="recherche" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" name="globale" id="globale" class="form-check-input">
                <label for="globale" class="form-check-label">Recherche globale</label>
            </div>
            <div class="form-group mt-4">
                <label for="tri">Tri</label>
                <select name="tri" id="tri" class="form-control">
                    <option value="categorie">Categorie</option>
                    <option value="nom">Nom</option>
                    <option value="date">Date</option>
                </select>
            </div>
            <button type="submit" class="btn btn-secondary mt-4">Envoyer</button>
        </form>
    </div>
</div>

<?php require_once(__DIR__ . '/../partials/footer.php') ?>