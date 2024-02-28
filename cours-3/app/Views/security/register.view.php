<?php
$title = 'Inscription';
require_once(__DIR__ . '/../partials/head.php');
?>

<section action="/register" method="POST" class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">S'INSCRIRE</h2>

              <form action="/register" method="POST">

                <div class="form-outline mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Veuillez entrer un nom.." />
                  <label class="form-label" for="name">Nom d'utilisateur:</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Veuillez entrer un e-mail.."/>
                  <label class="form-label" for="email">Email:</label>
                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" id="passwordField" placeholder="Veuillez entrer un mot de passe.." />
                    <label class="form-label" for="password">Mot de passe:</label>
                    <i class="fa-solid fa-eye" style="color: #000000;" onclick="togglePasswordVisibility()"></i>
                  </div>
                  <?php if (isset($error)) {
                    echo "<p class='text-danger'>" . $error . "</p>";
                  } ?>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-light">S'inscrire</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Vous avez déjà un compte ? <a href="login" class="fw-bold text-body"><u>Connectez-vous ici</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once(__DIR__ . '/../partials/footer.php');

?>