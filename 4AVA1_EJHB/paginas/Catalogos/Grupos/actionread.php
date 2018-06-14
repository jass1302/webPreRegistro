<?php
	//1.Conexión	
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	
	$tabla = "CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `id_ed` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_au` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_ho` varchar(15) COLLATE utf8_spanish_ci NOT NULL)";
  	mysqli_query($Link,$tabla);
	//2.
	$qry = "SELECT * FROM grupo;";
	//
	$resultado = mysqli_query($Link,$qry);
	//	

	echo "<table class='outputT'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Grupo</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	echo "</thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['nombre']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['id'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['id'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>