<?php

	$idEdit = $_GET['idEditar'];
	$Cosita = $_GET['cosita'];

	$Hyahhh = mysqli_connect("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");

	$qry = "UPDATE horario SET nombre ='".$Cosita."' WHERE id = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>