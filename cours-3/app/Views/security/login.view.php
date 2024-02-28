<?php
$title = 'Connexion';
require_once(__DIR__ . '/../partials/head.php');
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    SE CONNECTER
                </div>
                <div class="card-body text-center p-5">
                    <form action="/login" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez entrer un e-mail.." required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Veuillez entrer un mot de passe.." required>
                        </div>
                        <button type="submit" class="btn btn-success">Se Connecter</button>
                        <p class="text-center text-muted mt-5 mb-0"> Vous n'avez pas de compte ? <a href="login" class="fw-bold text-body"><u>Inscrivez-vous ici</u></a></p>
                    </form>
                    <?php if (isset($error)) {
                        echo "<p class='alert alert-danger mt-4'>" . $error . "<p>";
                    }           ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once(__DIR__ . '/../partials/footer.php');

?>