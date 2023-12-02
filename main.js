
function validarFormulario() {

    // Obtenemos los valores de los campos del formulario
    var cedula = document.getElementById("cedula").value;
    var nombre = document.getElementById("nombre").value;
    var contrasena = document.getElementById("contrasena").value;
    var correo = document.getElementById("correo").value;
    var tipo = document.getElementById("tipo").value;
    var comentarios = document.getElementById("comentarios").value;

    // Validamos que todos los campos estén llenos
    if (cedula === "" || nombre === "" || contrasena === "" || correo === "" || tipo === "" || comentarios === "") {
    alert("Por favor, llene todos los campos.");
    return false;
    }

    // Si todos los campos están llenos, enviamos el formulario
    return true;
}

  // Al hacer clic en el botón de enviar, validamos el formulario
  document.getElementById("registrar").onclick = validarFormulario;
