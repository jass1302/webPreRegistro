<?php
	//1.Conexión	
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	$qry = "SELECT * FROM profesor;";
	//
	$resultado = mysqli_query($Link,$qry);
	//	
	echo "<table class='outputT'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Número de empleado</td>";
	echo "<td>Nombre</td>";
	echo "<td>Apellido Paterno</td>";
	echo "<td>Apellido Materno</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	echo "</thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['numero_empleado']."</td>";
		echo "<td>".$registro['nombre']."</td>";
		echo "<td>".$registro['ape_paterno']."</td>";
		echo "<td>".$registro['ape_materno']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['numero_empleado'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['numero_empleado'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>