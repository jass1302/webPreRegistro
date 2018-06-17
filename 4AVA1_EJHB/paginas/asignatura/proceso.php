<?php
	//Paso 1: Recuperar mis variables

	$varMa = $_GET['materia'];
	$varPro = $_GET['profe'];
	$varGru = $_GET['grupo'];

	//echo "Cantidad:".$varCant."<br>Documento: ".$varDoc;

	//Paso 2: Conexión
	$Link =  mysqli_connect("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//Paso 3: Cadena de Alta de tipo de pagos
	$QueryAlta = "INSERT INTO asignatura (id_asignatura, materia_id_asignatura, profesor_numero_empleado, c_grupo_id_grupo) VALUES(null,'".$varMa."','".$varPro."','".$varGru."')";
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