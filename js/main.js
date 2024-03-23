function iniciar_sesion() {
  var tipoUsuario = "";
  var usuario = $("#usuario").val();
  if (usuario == "") {
    Swal.fire("Error", "Usuario no puede estar vacío", "error");
    return;
  }
  // Extrae de usuario si viene cómo directivo o no a través de la clave DIR
  var letras = usuario.substring(0, 3).toUpperCase();
  if (letras == "DIR") {
    //alert("Es directivo");

    tipoUsuario = "Directivo";
  } else {
    //alert("Es alumno");
    
    tipoUsuario = "Alumno";
  }
  var contrasenia = $("#contrasenia").val();
  if (contrasenia == "") {
    Swal.fire("Error", "La contraseña no puede estar vacía", "error");
    return;
  }
  $.ajax({
    type: "POST",
    url: "login.php",
    data: {
      usuario: usuario,
      tipoUsuario: tipoUsuario,
      contrasenia: contrasenia,
      letras:letras,
    },
    dataType: "html",
    success: function (response) {
      console.log(response);
      if (response == "OK") {
        switch (tipoUsuario) {
        case "Alumno":
          window.location.href = "./cargaDocumentos/carga-documentos.php";
          break;
        case "Directivo":
          window.location.href = "./altaAlumnos/alta-alumnos.php";
          break;
        default:
          alert("USUARIO NO ENCONTRADO");
          break;
        }
      }
    },
    error: function (xhr) {
      console.log(xhr.responseText);
      alert("ERROR FATAL");
    },
  });
}

// function cambiar_contrasenia() {
//   var usuario = $("#usuario").val();
//   var idUsuario = $("#id_Usuario").val();
//   var contraseniaNueva = $("#contraseniaNueva").val();
//   var confirmarContrasenia = $("#confirmarContrasenia").val();

//   if (contraseniaNueva !== confirmarContrasenia) {
//     Swal.fire(
//       "Error",
//       "La nueva contraseña y la confirmación no coinciden",
//       "error"
//     );
//     return;
//   }

//   $.ajax({
//     type: "POST",
//     url: "../change_pass.php",
//     data: {
//       usuario: usuario,
//       idUsuario: idUsuario,
//       contraseniaNueva: contraseniaNueva,
//       confirmarContrasenia: confirmarContrasenia,
//     },
//     dataType: "html",
//     success: async function (response) {
//       console.log(response);
//       if (response == "OK") {
//         await Swal.fire(
//           "Éxito",
//           "La contraseña ha sido cambiada correctamente",
//           "success"
//         );
//         $.ajax({
//           type: "post",
//           url: "../login.php",
//           data: " ",
//           dataType: "html",
//           success: function (response) {
//             window.location.href = "../index.php";
//           }
//         });
//       } else {
//         Swal.fire(
//           "Error al procesar la solicitud ",
//           "No se modificó la contraseña",
//           "error"
//         );
//       }
//     },
//     error: function () {
//       Swal.fire(
//         "Error",
//         "Ha ocurrido un error al procesar la solicitud",
//         "error"
//       );
//     },
//   });
// }

/**
 * Esta función permite editar a un usuario mostrado en un modal los datos viejos para cambiarlos por datos nuevos.
 * @param id_usuario: int
 */
// function editar(id_usuario = "0", matricula = "0"){
//   $("#id_edit").val(id_usuario);
//   $("#matricula_edit").val(matricula);
// }

// function modificarAlumno(){
//   var id_usuario = $("#id_edit").val();
//   var matricula = $("#matricula_edit").val();
//   Swal.fire({
//     title: "¿Desea modificar esta matrícula: " + matricula + " ?",
//     text: "Esta acción podría afectar el funcionamiento del sistema",
//     icon: "question",
//     showCancelButton: true,
//     confirmButtonColor: "#3085d6",
//     cancelButtonColor: "#d33",
//     confirmButtonText: "Sí, estoy seguro (a)",
//     cancelButtonText: "Espera, necesito estar seguro (a) si quiero modificar"
//   }).then((result) => {
//     if (result.isConfirmed) {
//       $.ajax({
//         type: "POST",
//         url: "modificar_alumno.php",
//         data: {
//           id_usuario: id_usuario,
//           matricula: matricula
//         },
//         dataType: "html",
//         success: function(response) {
//           console.log(response);
//           if (response == "OK") {
//             Swal.fire({
//               title: "Modificación exitosa",
//               text: "La matrícula ha cambiado exitosamente",
//               icon: "success"
//             });
//           } else {
//             Swal.fire(
//               'Moficación no realizada',
//               'La matrícula no ha cambiado porque: ' + response,
//               'warning'
//             );
//           }
//         }, error: function (xhr){
//           console.log(xhr.responseText);
//           Swal.fire(
//             "Error",
//             "Ha ocurrido un error, recargue la página o consulte al departamento de programadores",
//             "error"
//           );
//         }
//       });
//     }
//   });
// }


/**
 * Está función permite dar de baja a un usuario
 */
// function eliminar(id_usuario = "0"){
//   Swal.fire({
//     title: "¿Desea dar de baja a este alumno?",
//     text: "Esta acción es irreversible",
//     icon: "question",
//     showCancelButton: true,
//     confirmButtonColor: "#3085d6",
//     cancelButtonColor: "#d33",
//     confirmButtonText: "Dar de baja",
//     cancelButtonText: "Espera"
//   }).then((result) => {
//     if (result.isConfirmed) {
//       // Aquí va tu petición AJAX.
//       $.ajax({
//         type: "POST",
//         url: "baja_alumno.php",
//         data: {
//           id_usuario: id_usuario
//         },
//         dataType: "html",
//         success: function(response) {
//           console.log(response);
//           if (response == "OK") {
//             Swal.fire({
//               title: "Baja exitosa",
//               text: "El alumno ha sido dado de baja",
//               icon: "success"
//             });
//           } else {
//             Swal.fire(
//               'Baja no confirmada',
//               'El alumno no ha sido de baja porque: ' + response,
//               'warning'
//             );
//           }
//         }, error: function (xhr){
//           console.log(xhr.responseText);
//           Swal.fire(
//             "Error",
//             "Ha ocurrido un error, recargue la página o consulte al departamento de programadores",
//             "error"
//           );
//         }
//       });
//     }
//   });
// }
