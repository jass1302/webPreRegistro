<?php
	//Paso 1: Recuperar mis variables

	$varName = $_GET['name'];
	$varidEd = $_GET['idEd'];
	$varidAu = $_GET['idAu'];
	$varidH = $_GET['idH'];

	//echo "Cantidad:".$varCant."<br>Documento: ".$varDoc;

	//Paso 2: Conexión
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//Paso 3: Cadena de Alta de tipo de pagos
	$QueryAlta = 
	"INSERT INTO c_grupo(id_grupo, nombre_grupo, c_aula_id_aula, c_edificio_id_edificio, horario_id_horario) 
	VALUES(null,'".$varName."','".$varidAu."','".$varidEd."','".$varidAu."')";

	//Paso 4: Ejecutar Consulta
	mysqli_query($Link,$QueryAlta);
	echo $QueryAlta;
	if(mysqli_affected_rows($Link)>0)
	{
		echo "Registro exitoso";
	}
	else
	{
		echo "ahhhh no jaló :c";
	}

?>