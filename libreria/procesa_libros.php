<?php
// Verificar si se ha enviado el formulario de inserción de libros
if(isset($_POST['submit_libro'])) {
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "usuario", "contraseña", "biblioteca");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Recibir los datos del formulario
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $editorial = $_POST['editorial'];
    $isbn = $_POST['isbn'];
    $cantidad = $_POST['cantidad'];

    // Preparar la consulta SQL para insertar un libro (con consulta preparada)
    $sql = "INSERT INTO libros (titulo, autor, genero, e
