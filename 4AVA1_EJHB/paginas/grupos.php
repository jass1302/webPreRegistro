<?php 
  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
?> 
<?php

	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";

?>
<div id="divsito2">Grupos</div>

	<meta charset="utf-8">
	<script src="paginas/Catalogos/Grupos/jquery.js" type="text/javascript"></script>
	<script src="paginas/Catalogos/Grupos/js.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="estilos/catalogos.css">
<form action="" >
	<input type="hidden" name="idEditar" id="idEditar" value="">
	<table class="inputT">
		<tr>
			<td>Nombre de Grupo: </td>
			<td><input type="text" name="cosita" id="grupo" placeholder="Digite nombre del grupo"></td>
		</tr>

		<tr>
			<td>Nombre de Edificio: </td>
			<td><select id="edificio">
				<option value="0"> --- Seleccione una opción ---</option>
				<?php
				$link = mysqli_connect("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
				$edi = "SELECT * FROM c_edificio";
				$ed = mysqli_query($link,$edi);

				while ($row = mysqli_fetch_array($ed)){
				?>
				<option  value="<?= $row['id_edificio'] ?>">
					<?php
					echo $row['nombre'];
					?>
				</option>
			<?php } ?>
			</select>
			</td>
		</tr>

		<tr>
			<td>Número de Aula: </td>
			<td><select id="aula">
				<option value="0"> --- Seleccione una opción ---</option>
				<?php
				$au = "SELECT * FROM c_aula";
				$sau = mysqli_query($link,$au);

				while ($row = mysqli_fetch_array($sau)) {
				?>
				<option  value="<?= $row['id_aula'] ?>">
					<?php echo $row['nombre']; ?>
				</option>
					<?php } ?>
			</select>
		</td>
		</tr>

		<tr>
			<td>Horario: </td>
			<td><select id="horario">
				<option value="0"> --- Seleccione una opción ---</option>

				<?php
					$ho = "SELECT * FROM horario";
					$sho = mysqli_query($link,$ho);
					while ($row = mysqli_fetch_array($sho)){
				?>
				<option  value="<?= $row['id_horario'] ?>">
					<?php echo $row['nombre']; ?>
				</option>
					<?php } ?>
			</select>
		</td>
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