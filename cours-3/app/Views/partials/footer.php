<footer class="text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3 gradient-custom text-light">
    © <?= date('Y') ?> Copyright:
    <a class="text-body" href="http://localhost:8000">amine.com</a>
  </div>
  <!-- Copyright -->
</footer>

<script>
function togglePasswordVisibility() {
    var passwordField = document.getElementById("passwordField");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        
    } else {
        passwordField.type = "password";
    }
}
</script>
</body>

</html>