
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertar Préstamo</title>
</head>
<body>
	<h2>Insertar Préstamo</h2>
	<form action="procesa.presta.php" method="POST">
    	<label for="id_libro">ID del Libro:</label><br>
    	<input type="text" id="id_libro" name="id_libro"><br>
   	 
    	<label for="id_usuario">ID del Usuario:</label><br>
    	<input type="text" id="id_usuario" name="id_usuario"><br>
   	 
    	<label for="fecha_prestamo">Fecha de Préstamo:</label><br>
    	<input type="date" id="fecha_prestamo" name="fecha_prestamo"><br>
   	 
    	<label for="fecha_devolucion">Fecha de Devolución:</label><br>
    	<input type="date" id="fecha_devolucion" name="fecha_devolucion"><br><br>
   	 
    	<input type="submit" name="submit_prestamo" value="Insertar Préstamo">
	</form>
</body>
</html>


