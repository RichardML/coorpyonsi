<?php
	/*funcion para filtrar datos del formulario*/
	function filtrar($texto){
		$texto = htmlentities(strip_tags(trim($texto)));
		$texto = strtolower($texto);
		return $texto;
	}
	include("conexion.php");
	$conexion=conecta();
	// hacemos la consulta de registros
	$id = $_GET["id"];

	$query = "SELECT * FROM empleados WHERE IdEmp = ".$id ;
	$cursor = mysql_query($query, $conexion);
	
	$action = $_POST["action"];

	if ($action == "edit") {
		$idusuario = $_POST[id];
		$nombres = filtrar($_POST[nom]);
		$apellidos = filtrar($_POST[ape]);
		$cargo = filtrar($_POST[car]);
		$mail = filtrar($_POST[mail]);
		$genero = filtrar($_POST[gen]);
		$telefono = filtrar($_POST[tel]);
		$direccion = filtrar($_POST[dir]);
		$sql = "UPDATE empleados SET ";
		$sql.= "EmpNombre ='".$nombres."', EmpApellido='".$apellidos."', Empcargo ='".$cargo."', EmpMail ='".$mail."', EmpGenero ='".$genero."', EmpTelefono ='".$telefono."', EmpDir ='".$direccion."' ";
		$sql.= "WHERE IdEmp =".$idusuario;
		mysql_query($sql, $conexion);
		header("location: listado.php");
	}
?>
<html>
	<head>
	<title>Editar Usuario</title>
	</head>
	<body>
	<h1>Editar Usuario</h1>
	<form method="post" action="editar.php">
	<?php while ($fila = mysql_fetch_assoc($cursor)){?>
		Nombre:<input name="nom" type="text" value="<?php echo $fila['EmpNombre']; ?>"/>
		Apellido:<input name="ape" type="text" value="<?php echo $fila['EmpApellido']; ?>"/>
		Cargo:<input name="car" type="text" value="<?php echo $fila['Empcargo']; ?>"/>
		e-Mail:<input name="mail" type="text" value="<?php echo $fila['EmpMail']; ?>"/>
		Genero:<input name="gen" type="text" value="<?php echo $fila['EmpGenero']; ?>"/>
		Telefono:<input name="tel" type="text" value="<?php echo $fila['EmpTelefono']; ?>"/>
		Direccion:<input name="dir" type="text" value="<?php echo $fila['EmpDir']; ?>"/>

		<input type="hidden" id="id" name="id" value="<?php echo $fila['IdEmp']; ?>" />
		<input type="hidden" name="action" value="edit" />
	<?php  } ?>
		<button type="submit">Guardar</button>
		<input type="reset" value = "Limpiar"/>
	</form>
	</body>
</html>
