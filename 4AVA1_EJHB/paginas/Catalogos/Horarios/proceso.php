<?php
	//Paso 1: Recuperar mis variables

	$varName = $_GET['name'];

	//echo "Cantidad:".$varCant."<br>Documento: ".$varDoc;

	//Paso 2: Conexión
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
		//Paso 3: Cadena de Alta de tipo de pagos
	$QueryAlta = "INSERT INTO horario (id_horario,nombre) VALUES(null,'".$varName."')";
	var_dump($QueryAlta);
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