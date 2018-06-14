<?php
	$varedit = $_GET['Edit'];
	$varId = $_GET['id'];
	$varName = $_GET['name'];
	$varapPat = $_GET['apPat'];
	$varapMat = $_GET['apMat'];
	$Hyahhh =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	$qry = "UPDATE profesor SET numero_empleado ='".$varId."',nombre ='".$varName."',ape_paterno ='".$varapPat."',ape_materno ='".$varapMat."' WHERE numero_empleado = ".$varedit.";";
	mysqli_query($Hyahhh,$qry);
	
?>