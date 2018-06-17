<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="estilos/barra.css">
	<link rel="stylesheet" type="text/css" href="estilos/cuerpo.css">	
	<title>Curso de Preparación</title>
</head>
<body>
		<div id="barra_inv">
			<div id="barra_fondo"></div>

			<div id="barra_cont"> 
				<table>
				<td>
					 <a href="?link=inicio"><img src="imagenes/ipn.png"></a> 
				</td>
				<td>
					<h2>Pre-registro al Curso de Preparación para el Examen de Admisión Nivel Superior</h2>
				</td>
				<td>
					<a href="?link=inicio"><img src="imagenes/upiiz.png"></a> 
				</td>
			</table>

			</div>
			
		</div>

			
		<div id="barra_enlaces">
			<table>
				<td> <a href="?link=login">
							<?php
							session_start();
  							if (!isset($_SESSION['usuario'])) {
  								echo "Iniciar Sesion";
  							}
  							else{
  							echo "Usuario: ".$_SESSION['usuario'];
  							}
							?>
			</a></td>
				<td> <a href="?link=registro">Pre-Registro</a> </td>
				<td><a href="">Oferta Educativa</a> </td>
				<td><a href="">Información de Pago</a> </td>
				<td><a href="">Preguntas Frecuentes</a> </td>
				<td> <a href="?link=contacto">Contacto</a> </td>
			</table>
		</div>

	
</body>
</html>