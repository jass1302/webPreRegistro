<?php
	//1.Conexión	
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//2.
	$qry = "SELECT * FROM c_edificio;";
	//
	$resultado = mysqli_query($Link,$qry);
	//	

	echo "<table class='outputT'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Edificio</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	echo "</thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['nombre']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['id_edificio'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['id_edificio'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>