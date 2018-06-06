<?php
	//Paso 1: Recuperar mis variables

	$varName = $_GET['name'];

	//echo "Cantidad:".$varCant."<br>Documento: ".$varDoc;

	//Paso 2: Conexión
	$Link = mysqli_connect("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//Paso 3: Cadena de Alta de tipo de pagos
	$QueryAlta = "INSERT INTO grupo (id,nombre) VALUES(null,'".$varName."')";
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