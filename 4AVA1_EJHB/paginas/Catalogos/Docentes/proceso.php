<?php
	//Paso 1: Recuperar mis variables
	$varId = $_GET['id'];
	$varName = $_GET['name'];
	$varapPat = $_GET['apPat'];
	$varapMat = $_GET['apMat'];
	//echo "Cantidad:".$varCant."<br>Documento: ".$varDoc;
	//Paso 2: Conexión
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//Paso 3: Cadena de Alta de tipo de pagos
	$QueryAlta = "INSERT INTO profesor (numero_empleado,nombre,ape_paterno,ape_materno) VALUES('".$varId."','".$varName."','".$varapPat."','".$varapMat."')";
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