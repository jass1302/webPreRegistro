<?php 
  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }

	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";
?>
<link rel="stylesheet" type="text/css" href="estilos/mensajeria.css">

<div id="divsito2"> Mensajeria </div>
<h1>Formulario de envío de notificaciones por correo</h1>

<div class="mensajeria">
	<div class="men-main">
		<form method="post"></form>
	</div>

</div>