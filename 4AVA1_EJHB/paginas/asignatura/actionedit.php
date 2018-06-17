<?php

	$idEdit = $_GET['idEditar'];
	$mater = $_GET['materia'];
	$prof = $_GET['profe'];
	$grup = $_GET['grupo'];

	$Hyahhh = mysqli_connect("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$qry = "UPDATE asignatura SET materia_id_asignatura ='".$mater."', profesor_numero_empleado ='".$prof."', c_grupo_id_grupo ='".$grup."' WHERE id_asignatura = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>