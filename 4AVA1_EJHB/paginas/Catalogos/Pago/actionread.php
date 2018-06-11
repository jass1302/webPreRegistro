<?php
	//1.Conexión	
	$Link = new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//2.
	$qry = "SELECT * FROM catago";
	//
	$resultado = mysqli_query($Link,$qry);
	//	
	echo "<table class='outputT'>";
	echo "<tr>";
	echo "<td>Cantidad</td>";
	echo "<td>Tipo de documento</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['cantidad']."</td>";
		echo "<td>".$registro['documento']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['id'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['id'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>