<?php
	$mysqli = new mysqli("localhost", "root","","cuernavaca");
	
	$salida = "";
	$query = "SELECT * FROM cuernavaca ORDER BY Id_asociacion";

	if(isset($_POST['consulta']))
	{
		$q = $mysqli->real_escape_string($_POST['consulta']);

		$query = "SELECT Id_asociacion,Num_control,Sector_juridico,Nom_titular,Razon_social,Monto_entregado,fecha_validacion,fecha_actualizacion FROM cuernavaca WHERE Id_asociacion LIKE '%".$q."%' OR Num_control '%".$q." OR Sector_juridico like '%".$q."%' OR Nom_titular '%".$q."%' Razon_social 5LIKE '%".$q."%'OR Monto_entregado LIKE '".$q."%' OR fecha_validacion LIKE '%".$q."%' OR fecha_actualizacion LIKE '%".$q."%'";
	}
	$resultado = $mysqli->query($query);

	if($resultado->num_rows>0){

		$salida.="<table class='tabla_datos'>
			<thread>
				<tr>
					<td>Id_asociacion</td>
					<td>Num_control</td>
					<td>Nom_titular</td>
					<td>Razon_social</td>
					<td>Monto_entregado</td>
					<td>fecha_validacion</td>
					<td>fecha_actualizacion</td>
				</tr>
			</thread>
		<tbody>";

		while($fila = $resultado->fetch_assoc()){
			$salida.="<tr>
				<td>".$fila['Id_asociacion']"</td>
				<td>".$fila['Num_control']."</td>
				<td>"$fila['Nom_titular']."</td>
				<td>".$fila['Razon_social']."</td>
				<td>".$fila['Monto_entregado']."</td>
				<td>".$fila['fecha_validacion']."</td>
				<td>".$fila['fecha_actualizacion']."</td>

				</tr>";


		}
		$salida.="</tbody></table>";
	}else{
			$salida.="no hay salida :(";
	}
	echo $salida;
	$mysqli->close();

?> 