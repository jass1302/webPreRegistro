<?php
	$varedit = $_GET['Edit'];
	$varName = $_GET['cantidad'];
	$varapPat = $_GET['documento'];

	$Hyahhh = new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");

	$qry = "UPDATE catago SET cantidad ='".$varName."',documento ='".$varapPat."' WHERE id = ".$varedit.";";

	mysqli_query($Hyahhh,$qry);

	
?>