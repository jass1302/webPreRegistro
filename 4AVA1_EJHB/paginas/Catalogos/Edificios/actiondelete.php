<?php
	//Paso 1: Recuperar mis variables

	$idEliminar = $_GET['idEliminar'];

	//Paso 2: Conexión
	$Link = mysqli_connect("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//Paso 3: Cadena de Eliminar
	$QueryDelete = "DELETE FROM edificio WHERE id =".$idEliminar.";";
	//Paso 4: Ejecutar Consulta
	$result = mysqli_query($Link,$QueryDelete);
	if(mysqli_affected_rows($result)>0)
	{
		echo "Registro borrado exitosamente";
	}
	else
	{
		echo "ahhhh no jaló :c";
	}

?>