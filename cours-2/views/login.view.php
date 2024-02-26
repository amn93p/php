<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body text-center p-5">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez entrer un e-mail.." required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Veuillez entrer un mot de passe.." required>
                        </div>
                        <button type="submit" class="btn btn-secondary">Login</button>
                    </form>
                    <?php if (isset($errorMessage)) {
                        echo "<p class='alert alert-danger mt-4'>" . $errorMessage . "<p>";
                    }           ?>
                </div>
            </div>
        </div>
    </div>
</div>
