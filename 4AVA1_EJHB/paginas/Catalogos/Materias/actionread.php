<?php
	//1.Conexión	
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//2.
	$qry = "SELECT * FROM c_materia;";
	//
	$resultado = mysqli_query($Link,$qry);
	//	

	echo "<table class='outputT'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Materia</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	echo "</thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['nombre_asignatura']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['id_asignatura'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['id_asignatura'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>