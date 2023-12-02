<?php

// Conectamos con la base de datos
$conexion = mysqli_connect("localhost", "root", "", "usuario");

// Si no se pudo conectar, mostramos un mensaje de error
if (!$conexion) {
  die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
}

// Recibimos los datos del formulario
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];
$correo = $_POST["correo"];
$tipo = $_POST["tipo"];
$comentarios = $_POST["comentarios"];

// Insertamos los datos en la tabla Usuario
$query = "INSERT INTO usuario (Cedula, Nombre, Contrasena, Correo, Tipo, Comentarios) VALUES ('$cedula', '$nombre', '$contrasena', '$correo', '$tipo', '$comentarios')";

// Ejecutamos la consulta
mysqli_query($conexion, $query);

// Si la consulta se ejecutó correctamente, mostramos un mensaje de éxito
if (mysqli_affected_rows($conexion) > 0) {
  echo "¡Usuario registrado correctamente!";
} else {
  echo "Ocurrió un error al registrar el usuario.";
}

// Cerramos la conexión con la base de datos
mysqli_close($conexion);

?>