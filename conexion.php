<?php
	//Funci�n que realiza la conexi�n a la Base de Datos
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
