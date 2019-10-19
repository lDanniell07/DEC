<?
	$conexion=mysqli_connect('localhost','root','','cuernavaca');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
</head>
<body>

	<table border="1">
		<tr>
			<td>ID </td>
			<td>Num_control</td>
			<td>Sector Juridico</td>
			<td>Nombre titular</td>
			<td>Razon social</td>
			<td>Monto entregado</td>
			<td>Fecha Validacion</td>
			<td>Fecha Actualizacion</td>
			<td>Dinero declarado</td>
		</tr>
			<?php
				$sql="SELECT * FROM cuernavaca";
				$result=mysqli_master_query(($conexion,$sql))

				while($mostrar=mysqli_fetch()_array($result)){
					?>
					<tr>
						<td><?php echo $mostrar['Id_asociacion']?> </td>
						<td><?php echo $mostrar['Num_control']?> </td>
						<td><?php echo $mostrar['Sector_juridico']?> </td>
						<td><?php echo $mostrar['Nom_titular']?> </td>
						<td><?php echo $mostrar['Razon_social']?> </td>
						<td><?php echo $mostrar['Monto_entregado']?> </td>
						<td><?php echo $mostrar['fecha_validacion']?> </td>
						<td><?php echo $mostrar['fecha_actualizacion']?> </td>
						<td><?php echo $mostrar['Dinero_declarado']?> </td>
					</tr>
					<?php
				}

			?>

		<tr>

		</tr>
	</table>
</body>
</html>