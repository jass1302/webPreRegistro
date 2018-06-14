<?php
	//Paso 1: Recuperar mis variables

	$idGetData = $_GET['idGetData'];

	//Paso 2: Conexión
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//Paso 3: Cadena de Eliminar
	$QueryGet = "SELECT * FROM c_pago WHERE idpago =".$idGetData.";";
	//Paso 4: Ejecutar Consulta
	$result = mysqli_query($Link,$QueryGet);
	if(mysqli_num_rows($result)>0)
	{
		//Obtenemos los datos y los regresamos usando la notación JSON
		$unsoloregistro = mysqli_fetch_array($result);

		$cantidad = $unsoloregistro['cantidad'];
		$documento = $unsoloregistro['tipo_documento'];
		$arJSON = array('cantidad'=>$cantidad,'documento'=>$documento);
		echo json_encode($arJSON);
	}
	else
	{
		echo "ahhhh no jaló :c";
	}

?>