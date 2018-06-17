<?php
	//Paso 1: Recuperar mis variables

	$idGetData = $_GET['idGetData'];

	//Paso 2: Conexión
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//Paso 3: Cadena de Eliminar
	$QueryGet = "SELECT * FROM c_grupo WHERE id_grupo =".$idGetData.";";
	//Paso 4: Ejecutar Consulta
	$result = mysqli_query($Link,$QueryGet);
	if(mysqli_num_rows($result)>0)
	{
		//Obtenemos los datos y los regresamos usando la notación JSON
		$unsoloregistro = mysqli_fetch_array($result);

		$id = $unsoloregistro['id_grupo'];
		$name = $unsoloregistro['nombre_grupo'];
		$idEd = $unsoloregistro['c_edificio_id_edificio'];
		$idAu = $unsoloregistro['c_aula_id_aula'];
		$idH = $unsoloregistro['horario_id_horario'];
		$arJSON = array('idrl'=>$id,'namerl'=>$name, 'Edi'=>$idEd, 'Au'=>$idAu, 'Hr'=>$idH);
		echo json_encode($arJSON);
	}
	else
	{
		echo "Not working";
	}

?>