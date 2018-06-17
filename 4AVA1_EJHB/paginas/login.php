<?php 
  if (!isset($_SESSION['usuario'])) {
  }
  else{
  	header("Location: index.php?link=administrador");
  }
  ?>
<link rel="stylesheet" type="text/css" href="estilos/login.css">
	
	<form method="POST" action="paginas/login/validacion.php">

		<div id="ligin">
			<div id="iniS">INICIAR SESIÓN</div>
	<table class="logT">
		<tr>
			<td>Usuario:</td>
		<td><input type="text" name="user" id="username" placeholder="Usuario"></td>	
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td>
				<input type="password" name="pass" id="pass" placeholder="Contraseña">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit"> Iniciar Sesion</button>
			</td>
			
		</tr>
	</table>
		
	</div>


	</form>