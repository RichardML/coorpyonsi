<?php
	// creamos la conexión a mysql
	include("conexion.php");

	$vl_Conexion=conecta();

	// hacemos la consulta de registros
	$query = "SELECT * FROM empleados ORDER BY EmpNombre ASC";
	$queEmp = mysql_query($query, $vl_Conexion);
?>

<html>
	<head>
		<title>Listado de Usuarios</title>
		</head>
	<body>
		<h1>Listado de Usuarios Registrados</h1>
		<table>
			<tr><td>Código</td><td>Nombres</td><td>Apellidos</td><td>Cargo</td><td>Mail</td><td>Género</td><td>Telefono</td><td>Dirección</td></tr>
			<?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { ?>
			<tr>
				<td><?php echo $rsEmp['IdEmp']; ?></td>
				<td><?php echo $rsEmp['EmpNombre']; ?></td>
				<td><?php echo $rsEmp['EmpApellido']; ?></td>
				<td><?php echo $rsEmp['EmpCargo']; ?></td>
				<td><?php echo $rsEmp['EmpMail']; ?></td>
				<td><?php echo $rsEmp['EmpGenero']; ?></td>
				<td><?php echo $rsEmp['EmpTelefono']; ?></td>
				<td><?php echo $rsEmp['EmpDir']; ?></td>
				<td><a href="editar.php?id=<?php echo $rsEmp['IdEmp']; ?>">Editar</a></td>
			</tr>
		  <?php } ?>
		</table>
	</body>
</html>
