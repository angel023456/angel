<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertar Libro</title>
</head>
<body>
	<h2>Insertar Libro</h2>
	<form action="procesa_libros.php" method="POST">
    	<label for="titulo">Título:</label><br>
    	<input type="text" id="titulo" name="titulo"><br>
   	 
    	<label for="autor">Autor:</label><br>
    	<input type="text" id="autor" name="autor"><br>
   	 
    	<label for="genero">Género:</label><br>
    	<input type="text" id="genero" name="genero"><br>
   	 
    	<label for="editorial">Editorial:</label><br>
    	<input type="text" id="editorial" name="editorial"><br>
   	 
    	<label for="isbn">ISBN:</label><br>
    	<input type="text" id="isbn" name="isbn"><br>
   	 
    	<label for="cantidad">Cantidad:</label><br>
    	<input type="number" id="cantidad" name="cantidad" min="1"><br><br>
   	 
    	<input type="submit" name="submit_libro" value="Insertar Libro">
	</form>
</body>
</html>



