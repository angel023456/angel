<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción de Usuarios</title>
</head>
<body>

<h2>Formulario de Inserción de Usuarios</h2>

<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" name="telefono" required><br>

    <input type="submit" name="submit_usuario" value="Insertar Usuario">
</form>

<?php
// Verificar si se ha enviado el formulario de inserción de usuarios
if(isset($_POST['submit_usuario'])) {
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "usuario", "contraseña", "biblioteca");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Preparar la consulta SQL para insertar un usuario
    $sql = "INSERT INTO usuarios (nombre, email, telefono)
            VALUES ('$nombre', '$email', '$telefono')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Usuario insertado correctamente";
    } else {
        echo "Error al insertar el usuario: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}
?>

</body>
</html>
