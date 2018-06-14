<?php
	//1.Conexión	
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//2.
	$qry = "SELECT * FROM c_pago";
	//
	$resultado = mysqli_query($Link,$qry);
	//	
	echo "<table class='outputT'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Cantidad</td>";
	echo "<td>Tipo de documento</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	echo "</thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['cantidad']."</td>";
		echo "<td>".$registro['tipo_documento']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['idpago'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['idpago'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>