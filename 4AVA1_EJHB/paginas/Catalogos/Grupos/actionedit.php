<?php

	$idEdit = $_GET['idEditar'];
	$Cosita = $_GET['cosita'];

	$Hyahhh =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$qry = "UPDATE c_grupo SET nombre_grupo ='".$Cosita."' WHERE id_grupo = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>