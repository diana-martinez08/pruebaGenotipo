function iniciar_sesion() {
  var email = $("#email").val();
  var movil = $("#movil").val();

  $.ajax({
    type: "POST",
    url: "login.php",
    data: {
      email: email,
      movil: movil
    },
    dataType: "html",
    success: async function(response) {
      console.log(response);
      await Swal.fire("Sesión", "Éxito al iniciar sesión", "success");
      $("#img").attr(
        "src",
        "https://cdn2.iconfinder.com/data/icons/greenline/512/check-512.png"
      );

      await Swal.fire("Sesión", "Fracaso al iniciar sesión", "error");
      $("#img").attr(
        "src",
        "https://cdn0.iconfinder.com/data/icons/basic-web-ui-elements/295/close-512.png"
      );
    },
    error: function(xhr) {
      console.log(xhr.responseText);
    }
  });
}
