$(document).ready(function () {
  $("#login-form").submit(function (e) {
    e.preventDefault(); // Evita il comportamento di default del form

    let username = $("#username").val();
    let password = $("#password").val();

    $.ajax({
      type: "POST",
      url: "login.php",
      data: {
        username: username,
        password: password,
      },
      success: function (response) {
        if (response === "success") {
          $("#login-message").html("Accesso effettuato con successo.");
          redirectToPage("operators.php");
        } else {
          $("#login-message").html("Credenziali di accesso errate.");
        }
      },
    });
  });
});
