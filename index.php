<!DOCTYPE html>
<html>
	<head>
		<title>Registro agenda</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<form method="post" action="registro.php">
			Nombre:<input name="nom" type="text" id="nombre"/>
			Apellido:<input name="ape" type="text" id="apellido"/>
			Cargo:<input name="car" type="text" id="cargo"/>
			e-Mail:<input name="mail" type="text" id="mail"/>
			Genero:<input name="gen" type="text" id="genero"/>
			Telefono:<input name="tel" type="text" id="telefono"/>
			Direccion:<input name="dir" type="text" id="direccion"/>
			<input type="submit" name="Submit" value="Insertar Registro" />
		</form>
		<a href='listado.php'>Lista de Empleados Registrados</a>
	</body>
</html>
