<?php
	//Función que realiza la conexión a la Base de Datos
	function conecta()
	{ 
		$conexion = mysql_connect("localhost","root","toor");
		mysql_select_db("coorpyonsy", $conexion);

		if (!$conexion)
		{
		   echo "no se conecta";
		   exit;
		}
		else
		{
			return $conexion;
		}
	}
?>
