<?php

	$idEdit = $_GET['idEditar'];
	$Cosita = $_GET['cosita'];

		$Hyahhh =  new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");


	$qry = "UPDATE aula SET nombre ='".$Cosita."' WHERE id = ".$idEdit.";";

	mysqli_query($Hyahhh,$qry);

	
?>