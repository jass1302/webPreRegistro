<?php

	$idEdit = $_GET['idEditar'];
	$Cosita = $_GET['cosita'];

	$Hyahhh = new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$qry = "UPDATE c_materia SET nombre_asignatura ='".$Cosita."' WHERE id_asignatura = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>