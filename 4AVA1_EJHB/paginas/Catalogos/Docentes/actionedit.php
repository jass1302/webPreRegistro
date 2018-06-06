<?php
	$varedit = $_GET['Edit'];
	$varId = $_GET['id'];
	$varName = $_GET['name'];
	$varapPat = $_GET['apPat'];
	$varapMat = $_GET['apMat'];

	$Hyahhh = new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");

	$qry = "UPDATE docente SET numero_empleado ='".$varId."',nombre ='".$varName."',apPat ='".$varapPat."',apMat ='".$varapMat."' WHERE numero_empleado = ".$varedit.";";

	mysqli_query($Hyahhh,$qry);

	
?>