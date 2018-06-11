<?php
	//Paso 1: Recuperar mis variables
	$varCant = $_GET['cantidad'];
	$varDoc = $_GET['documento'];

	//echo "Cantidad:".$varCant."<br>Documento: ".$varDoc;

	//Paso 2: Conexión
	$Link = new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//Paso 3: Cadena de Alta de tipo de pagos
	$QueryAlta = "INSERT INTO catpago (cantidad,documento) VALUES('".$varCant."','".$varDoc."')";
	//Paso 4: Ejecutar Consulta
	mysqli_query($Link,$QueryAlta);
	if(mysqli_affected_rows($Link)>0)
	{
		echo "Registro exitoso";
	}
	else
	{
		echo "ahhhh no jaló :c";
	}

?>