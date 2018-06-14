<?php
	
	$palabra = $_GET['pal'];

	$conect =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$busqueda = "SELECT nombre_pila, a_materno, a_paterno, correo_electronico, telefono_movil, telefono_fijo
	 				FROM interesado 
	 				WHERE nombre_pila like '%".$palabra."%'"." OR a_paterno like '%".$palabra."%'"
	 				." OR a_materno like '%".$palabra."%'"
	 				." OR correo_electronico like '%".$palabra."%'"
	 				." OR telefono_movil like '%".$palabra."%'"
	 				." OR telefono_fijo like '%".$palabra."%'";
	 				
	echo "<table class = 'pagT'>";
		$todosLosRegistros = mysqli_query($conect,$busqueda);
	echo "<thead>";
	echo"<tr>";
	echo"<td> Nombre"; echo"</td>";
	echo"<td> E-Mail"; echo"</td>";
	echo"<td> Teléfono"; echo"</td>";
	echo"<td> Pago"; echo"</td>";
	echo"</tr>";
	echo "</thead>";
	while ($unSoloRegistro = mysqli_fetch_array($todosLosRegistros)) {

		$nomCompleto = $unSoloRegistro['nombre_pila']." ".$unSoloRegistro['a_paterno']." ".$unSoloRegistro['a_materno'];
		$mail = $unSoloRegistro['correo_electronico'];
		$telefono = $unSoloRegistro['telefono_movil'];

		echo "<tr>";
		echo "<td>".$nomCompleto."</td>" ;
		echo "<td>".$mail."</td>" ;
		echo "<td>".$telefono."</td>" ;
		echo "<td>
		<select>
		<option>
			--- Seleccione una opción ---
		</option>
		</select>
		 </td>";
		echo "</tr>";
	}
	echo "</table>";
?>