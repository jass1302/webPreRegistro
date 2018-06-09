<?php
	//Paso 1: Recuperar mis variables
	$varName = $_GET['name'];
	$varapPat = $_GET['apPat'];
	$varapMat = $_GET['apMat'];
	$varDate=$_GET['dateN'];
	$varGenero=$_GET['genero'];
	$varTelM=$_GET['telm'];
	$VarTelF=$_GET['telf'];
	$VarMail=$_GET['email'];
	//data:{name: varNombre, apPat: varApMat, apMat: varApMat,dateN: varDate,genero: varGenero,telm: varTelM, telf: VarTelF,email: VarMail}

	//Paso 2: Conexión
	$Link = new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//Paso 3: Cadena de Alta de tipo de pagos
	$QueryAlta = "INSERT INTO `interesado` (`id_interesado`, `nombre_pila`, `a_paterno`, `a_materno`, `fecha_nacimiento`, `correo_electronico`, `genero`, `telefono_movil`, `telefono_fijo`) VALUES (NULL,'".$varName."', '".$varapPat."', '".$varapMat."', '".$varDate."', '".$varGenero."','".$varTelM."', '".$VarTelF."', '".$VarMail."')";

	//Paso 4: Ejecutar Consulta
	mysqli_query($Link,$QueryAlta);
if(mysqli_affected_rows($Link)>0)
	{
		echo "Registro exitoso";
	}
	else
	{
		echo "No procedio el registro";
	}

?>
