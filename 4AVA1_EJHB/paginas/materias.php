<?php

	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";
?>
<div id="divsito2">Materias</div>
	<meta charset="utf-8">
	<script src="paginas/Catalogos/Materias/jquery.js" type="text/javascript"></script>
	<script src="paginas/Catalogos/Materias/js.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="estilos/Catalogos.css">
</head>
<body>

<form action="" >
	<input type="hidden" name="idEditar" id="idEditar" value="">
	<table class="inputT">
		<tr>
			<td>Materia: </td>
			<td><input type="text" name="cosita" id="materia"></td>
		</tr>
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