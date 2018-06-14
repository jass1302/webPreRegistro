<?php

	$idEdit = $_GET['idEditar'];
	$Cosita = $_GET['cosita'];

	$Hyahhh = new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$qry = "UPDATE c_edificio SET nombre ='".$Cosita."' WHERE id_edificio = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>