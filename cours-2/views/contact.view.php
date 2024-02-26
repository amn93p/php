<?php
$title = 'Contact';
require_once(__DIR__ . "/../partials/head.php") ?>

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Contact</h5>
               <form action="contactValide.php" method="">
                  <div class="form-group">
                     <label for="email">E-mail</label>
                     <input type="email" name="email" id="email" class="form-control" style="margin-top:-30px;margin-bottom:40px;">
                  </div>

                  <div class="form-group">
                     <label for="message">Message</label>
                     <textarea name="message" id="message" cols="30" rows="5" class="form-control mt-3" ></textarea>
                  </div>
                  <div class="text-center"> <!-- Added text-center class -->
                     <button type="submit" class="btn btn-secondary mt-5">Envoyer</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php require_once(__DIR__ . "/../partials/footer.php"); ?>