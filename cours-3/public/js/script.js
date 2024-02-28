function togglePasswordVisibility() {
    var passwordField = document.getElementById("passwordField");
    if (passwordField.type === "password") {
      passwordField.type = "text";

    } else {
      passwordField.type = "password";
    }
  }
