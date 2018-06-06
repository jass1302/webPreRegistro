<?php
	//1.Conexión	
	$Link = new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//2.
	$tabla = "CREATE TABLE IF NOT EXISTS `docente` (
  `numero_empleado` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apPat` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apMat` varchar(45) COLLATE utf8_spanish_ci NOT NULL
)";
mysqli_query($Link,$tabla);

	$qry = "SELECT * FROM docente;";
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
	echo "<thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['numero_empleado']."</td>";
		echo "<td>".$registro['nombre']."</td>";
		echo "<td>".$registro['apPat']."</td>";
		echo "<td>".$registro['apMat']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['numero_empleado'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['numero_empleado'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
