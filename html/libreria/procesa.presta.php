<?php
// Verificar si se ha enviado el formulario de inserción de préstamos
if(isset($_POST['submit_prestamo'])) {
	// Conexión a la base de datos
	$conexion = new mysqli("localhost", "usuario", "contraseña", "biblioteca");

	// Verificar la conexión
	if ($conexion->connect_error) {
    	die("Error en la conexión: " . $conexion->connect_error);
	}

	// Recibir los datos del formulario
	$id_libro = $_POST['id_libro'];
	$id_usuario = $_POST['id_usuario'];
	$fecha_prestamo = $_POST['fecha_prestamo'];
	$fecha_devolucion = $_POST['fecha_devolucion'];

	// Preparar la consulta SQL para insertar un préstamo
	$sql = "INSERT INTO prestamos (id_libro, id_usuario, fecha_prestamo, fecha_devolucion)
        	VALUES ($id_libro, $id_usuario, '$fecha_prestamo', '$fecha_devolucion')";

	// Ejecutar la consulta
	if ($conexion->query($sql) === TRUE) {
    	echo "Préstamo insertado correctamente";
	} else {
    	echo "Error al insertar el préstamo: " . $conexion->error;
	}

	// Cerrar la conexión
	$conexion->close();
}
?>
