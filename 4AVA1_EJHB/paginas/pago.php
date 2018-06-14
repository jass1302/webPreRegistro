<?php
	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";
?>
	<script src="paginas/Catalogos/Pago/jquery.js" type="text/javascript"></script>
	<script src="paginas/Catalogos/Pago/js.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="estilos/catalogos.css">
	

<div id="divsito2"> Pagos </div>
<form action="" >
	<input type="hidden" name="idEditar" id="idEditar" value="">
	<table class="inputT">
		<tr>
			<td>Cantidad: </td>
			<td><input type="text" name="cosita" id="cantidad" placeholder="Digite la cantidad"></td>
		</tr>
		<tr>
			<td>Tipo de documento:</td>
			<td><input type="text" name="cosita" id="documento" placeholder="Digite el tipo de documeto"></td>
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