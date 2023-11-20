<?php

include('conexionbase.php');

$nombre = $_POST["nombrecompleto"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];
$institucion = $_POST["institucion"];
$pais = $_POST["pais"];
$nivel_educativo = $_POST["niveleducativo"];
$rol = $_POST["rol"];
$terminos = isset($_POST["terminos"]) ? 1 : 0; // Verifica si el checkbox está marcado
$politica = isset($_POST["politica"]) ? 1 : 0; // Verifica si el checkbox está marcado

$id = "1";

// Verificar si el correo electrónico ya está en uso
$verificar_sql = "SELECT * FROM registro WHERE email = '$email'";
$resultado_verificar = mysqli_query($conn, $verificar_sql);

if (!$resultado_verificar) {
      // Handle database query error
      die("Error en la verificación: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado_verificar) > 0) {
      // El correo electrónico ya está en uso, mostrar una alerta en JavaScript
      echo "<script>alert('Este correo electrónico ya está en uso. Por favor, utilice otro.');</script>";
} else {
      // El correo electrónico no está en uso, proceder con la inserción
      $sql =  "INSERT INTO registro (`id`, `nombre`, `email`, `contrasena`, `institucion`, `pais`, `niveleducativo`, `rol`, `terminos`, `politica`) VALUES ('$id','$nombre', '$email', '$contrasena', '$institucion', '$pais', '$nivel_educativo', '$rol', '$terminos', '$politica')";
      $resultado = mysqli_query($conn, $sql);

      if ($resultado) {
      echo "Registro exitoso.";
      } else {
      // Handle database query error
      echo "Error al registrar: " . mysqli_error($conn);
      }
}

mysqli_close($conn);

?>
