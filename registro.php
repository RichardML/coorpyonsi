<?php
	include("conexion.php");

	$conexion = conecta();

	/*funcion para filtrar datos del formulario*/
	function filtrar($texto){
		$texto = htmlentities(strip_tags(trim($texto)));
		$texto = strtolower($texto);
		return $texto;
	}

	/*almacenar los datos del formulario*/
	$nombres = filtrar($_POST[nom]);
	$apellidos = filtrar($_POST[ape]);
	$cargo = filtrar($_POST[car]);
	$mail = filtrar($_POST[mail]);
	$genero = filtrar($_POST[gen]);
	$telefono = filtrar($_POST[tel]);
	$direccion = filtrar($_POST[dir]);

	/*Sentencias sql para inserrtar los datos a la tabla*/
	$sql = "INSERT INTO empleados VALUES(null,
			'$nombres',
			'$apellidos',
			'$cargo',
			'$mail',
			'$genero',
			'$telefono',
			'$direccion')";

	print $sql;

	/*Ejecucion de la consulta*/
	mysql_query($sql,$conexion);

	/*Cerrar la conexion*/
	mysql_close($conexion);
	
	header("location:index.php");
?>
