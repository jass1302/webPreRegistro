<?php
	$varedit = $_GET['Edit'];
	$varName = $_GET['cantidad'];
	$varapPat = $_GET['documento'];

	$Hyahhh =   new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");

	$qry = "UPDATE c_pago SET cantidad ='".$varName."',tipo_documento ='".$varapPat."' WHERE idpago = ".$varedit.";";

	mysqli_query($Hyahhh,$qry);

	
?>