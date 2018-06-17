<?php
	//Paso 1: Recuperar mis variables

	$idGetData = $_GET['idGetData'];

	//Paso 2: Conexión
	$Link =  mysqli_connect("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//Paso 3: Cadena de Eliminar
	$QueryGet = "SELECT * FROM asignatura WHERE id_asignatura =".$idGetData.";";
	//Paso 4: Ejecutar Consulta
	$result = mysqli_query($Link,$QueryGet);
	if(mysqli_num_rows($result)>0)
	{
		//Obtenemos los datos y los regresamos usando la notación JSON
		$unsoloregistro = mysqli_fetch_array($result);
		$id = $unsoloregistro['id_asignatura'];
		$idma = $unsoloregistro['materia_id_asignatura'];
		$idpro = $unsoloregistro['profesor_numero_empleado'];
		$idgr = $unsoloregistro['c_grupo_id_grupo'];
		$arJSON = array('idrl'=>$id,'mate'=>$idma, 'prof'=>$idpro, 'grup'=>$idgr);
		echo json_encode($arJSON);
	}
	else
	{
		echo "ahhhh no jaló :c";
	}

?>