<?php
	//Paso 1: Recuperar mis variables

	$idGetData = $_GET['idGetData'];

	//Paso 2: Conexión
	$Link = new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//Paso 3: Cadena de Eliminar
	$QueryGet = "SELECT * FROM docente WHERE numero_empleado =".$idGetData.";";
	//Paso 4: Ejecutar Consulta
	$result = mysqli_query($Link,$QueryGet);
	if(mysqli_num_rows($result)>0)
	{
		//Obtenemos los datos y los regresamos usando la notación JSON
		$unsoloregistro = mysqli_fetch_array($result);

		$id = $unsoloregistro['numero_empleado'];
		$name = $unsoloregistro['nombre'];
		$apPat = $unsoloregistro['apPat'];
		$apMat = $unsoloregistro['apMat'];
		$arJSON = array('idrl'=>$id,'namerl'=>$name,'pat'=>$apPat,'mat'=>$apMat);
		echo json_encode($arJSON);
	}
	else
	{
		echo "ahhhh no jaló :c";
	}

?>