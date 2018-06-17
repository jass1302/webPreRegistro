<?php 
  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }

	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";

?>
	<script src="paginas/Catalogos/Docentes/jquery.js" type="text/javascript"></script>
	<script src="paginas/Catalogos/Docentes/js.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="estilos/catalogos.css">
	

<div id="divsito2"> Docentes </div>
<form action="" >
	<input type="hidden" name="idEditar" id="idEditar" value="">
	<table class="inputT">
		<tr>
			<td>Número de empleado: </td>
			<td><input type="text" name="cosita" id="id" placeholder="Digite número del empleado"></td>
		</tr>
		<tr>
			<td>Nombre: </td>
			<td><input type="text" name="cosita" id="nombre" placeholder="Digite el nombre"></td>
		</tr>
		<tr>
			<td>Apellido Paterno:</td>
			<td><input type="text" name="cosita" id="ape_paterno" placeholder="Digite el primer apellido"></td>
		</tr>
		<tr>
			<td>Apellido Materno: </td>
			<td><input type="text" name="cosita" id="ape_materno" placeholder="Digite el segundo apellido"></td>
		</tr>
	</table>
	<table class="inputT">
		<tr>
			<td><input type="reset" name="limpiar" value="Limpiar"></td>
			<td><input type="reset" name="guardar" value="Registrar" id="guardar" onclick="guardarAjax();"></td>
		</tr>
	</table>	
</form>
	<!--Para mostrar la tabla-->
	<div id="showtable"></div>

<script type="text/javascript">
	//Cuando se cargue la página
	$(document).ready(function(){
		//alert("pagina carga ok0");
		actionReadAJAX();
		//Debemos mostrar los registros
	});
</script>