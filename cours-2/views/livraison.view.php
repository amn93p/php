<?php
$title = 'Livraison';
require_once(__DIR__ . "/../partials/head.php") ?>

<div class="d-flex justify-content-center">
   <div class="card mt-5" style="min-width: 400px;">
      <div class="card-body">
         <form action="livraisonValide.php" method="POST">
            <div class="mb-3">
               <label for="nom" class="form-label">Nom</label>
               <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
            </div>
            <div class="mb-3">
               <label for="prenom" class="form-label">Prénom</label>
               <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prénom">
            </div>

            <div class="mb-3">
               <label for="code_postal" class="form-label">Code Postal</label>
               <input type="text" class="form-control" name="code_postal" id="code_postal" placeholder="Entrez votre code postal">
            </div>

            <div class="mb-3">
               <label for="ville" class="form-label">Ville</label>
               <input type="text" class="form-control" name="ville" id="ville" placeholder="Entrez votre ville">
            </div>

            <div class="mb-3">
               <label for="pays" class="form-label">Pays</label>
               <input type="text" class="form-control" name="pays" id="pays" placeholder="Entrez votre pays">
            </div>

            <div class="mb-3">
               <label for="telephone" class="form-label">Téléphone</label>
               <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Entrez votre numéro de téléphone">
            </div>

            <div class="text-center"> <!-- Added text-center class -->
               <button type="submit" class="btn btn-secondary">Envoyer</button>
            </div>
         </form>
      </div>
   </div>
</div>

<?php require_once(__DIR__ . "/../partials/footer.php") ?>