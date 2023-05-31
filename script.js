$(document).ready(function () {
  $("#login-form").submit(function (e) {
    e.preventDefault(); // Evita il comportamento di default del form

    let username = $("#username").val();
    // console.log($("#username").val());
    let password = $("#password").val();
    // console.log($("#password").val());

    $.ajax({
      type: "POST",
      url: "login.php",
      data: {
        username,
        password,
      },
      success: function (res) {
        console.log(res);
        if (res === "success") {
          $("#login-message").html("Accesso effettuato con successo.");
          redirectToPage("operators.php");
        } else {
          $("#login-message").html("Credenziali di accesso errate.");
        }
      },
    });
  });
});
