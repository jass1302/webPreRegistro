<?php

	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";
?>
    <div id="divsito2">Pagos</div>
    <meta charset="utf-8">
    <script src="scripts/jquery.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="estilos/buscador.css">
	<script src="paginas/pagos/script.js" type="text/javascript"></script>

	<form action="">
		
		<table class="goTable">
			<tr>
				<td>
			<input type="text" name="bus" id="bus" placeholder=" Digite nombre de aspirante, email o teléfono" onkeyup="push();">		
				</td>
			</tr>
			

		</table>

	</form>

	<div id="resul"></div>

<script type="text/javascript">
		$(document).ready(function(){});
</script>