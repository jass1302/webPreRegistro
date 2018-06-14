<?php

	$idEdit = $_GET['idEditar'];
	$Cosita = $_GET['cosita'];

	$Hyahhh =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$qry = "UPDATE grupo SET nombre ='".$Cosita."' WHERE id = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>