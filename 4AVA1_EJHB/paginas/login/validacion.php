<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];



	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	$cuentas = mysqli_query($Link,"SELECT * from administrador where usuario='" . $user . "' OR id_administrador= '".$user."'");


	if($row = mysqli_fetch_array($cuentas)){
	if($row['passwoord'] == $pass){
		session_start();
	$_SESSION['usuario'] = $user;
	header("Location: ../../index.php?link=administrador");
	}else{
		echo "Contraseña Incorrecta";
	header("Location: ../../index.php");
	exit();	
	}
	}else{
	header("Location: ../../index.php");
	exit();	
	}
?>