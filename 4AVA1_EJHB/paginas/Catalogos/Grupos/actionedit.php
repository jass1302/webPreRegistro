<?php

	$idEdit = $_GET['idEditar'];
	$Cosita = $_GET['cosita'];
	$edificio = $_GET['idEd'];
	$aula = $_GET['idau'];
	$horario = $_GET['idhor'];

	$Hyahhh =  mysqli_connect("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$qry = "UPDATE c_grupo SET nombre_grupo ='".$Cosita."', c_aula_id_aula ='".$aula."', c_edificio_id_edificio ='".$edificio."', horario_id_horario ='".$horario."' WHERE id_grupo = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>