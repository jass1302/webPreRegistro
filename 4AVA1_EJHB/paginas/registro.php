
	<?php

	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";

?>
<div id="divsito2">Registro de Interesado</div>
	<script src="scripts/jquery.js" type="text/javascript"></script>
	<script src="paginas/Registro/js.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="estilos/catalogos.css">
</script>
	</head>
	<body>
		<form >
	
			<table class="inputT" >
						<form action="" method="post" >
						<tr> 
                           <th colspan="2">DATOS PERSONALES</th>
						</tr>

						<tr>
							<td width="40%" >Nombre</td>
                            <td> <input type="text" id="nombre" name="nombre" placeholder="Nombre" required/>  </td>
						</tr>

						<tr>
							<td width="40%">Apellido Paterno</td>
                            <td><input type="text" id="apaterno" name="apaterno" placeholder="Apellido Paterno" required/></td>
						</tr>

						<tr>
							<td width="40%">Apellido Materno</td>
                            <td><input type="text" id="amaterno" name="amaterno" placeholder="Apellido Materno" required/></td>
						</tr>

						<tr>
							<td width="40%">Fecha de Nacimiento</td>
                            <td><input type="date" id="date" name="date" value="2000-01-01" required/></td>
						</tr>
						<tr>
							<td width="40%">Sexo</td>
                            <td>
                            	<input name="genero" class="gener" type="radio" value="M" checked/> Masculino 
                            	<input name="genero" class="gener" type="radio" value="F" /> Femenino
                           
                        </td>
						</tr>
						<tr> 
                           <th colspan="2">DATOS DE CONTACTO</th>
						</tr>

						<tr>
							<td width="40%">Telefono Movil</td>
                            <td><input type="tel" id="telM" name="telM" placeholder="Movil" maxlength="10" required="">  </td>
						</tr>

						<tr>
							<td width="40%">Telefono  fijo</td>
                            <td><input type="tel" id="telF" name="telF" placeholder="Telefono"  maxlength="10" required></td>
						</tr>

						<tr>
							<td width="40%">Correo electronico</td>
                            <td><input type="email" id="correo" name="correo" placeholder="e-mail" required/></td>
						</tr>
					</tr>
						<tr>
							<th width="40%" colspan="2">Interes en la Institucion</th>
						</tr>
						<tr>
							<td width="40%">¿Esta interesado en ingresar a UPIIZ o IPN en general?</td>
                            <td>
                            	<input name="Interes" class="Intere" type="radio" value="1" /> Si
                            	<input name="Interes" class="Intere" type="radio" value="0"  checked/> No
                           
                        </td>
						</tr>
					</table>
						<table class="inputT" id="InteresUpiiz">
						
						<script type="text/javascript">
						//Cuando se cargue la página
							$(document).ready(function(){
		//alert("pagina carga ok0");
								actionCompleteAJAX();
		//Debemos mostrar los registros
							});
					   </script>	

				   

					   <table class="inputT">
		<tr>
			<td><input type="reset" name="limpiar" value="Limpiar"></td>
			<td><input type="reset" name="guardar" value="Registrar" id="guardar" onclick="guardarAjax();"></td>
		</tr>
	</table>
		</form>

</html>