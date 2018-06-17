<?php 
  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
?>
<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="paginas/asignatura/js.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="estilos/catalogos.css"> 
<?php

	$topnav = file_get_contents("paginas/administrador.php");
	echo $topnav."<br><br>";

?>
<div id="divsito2">Grupos | Asignatura</div>

<form action="">
	<input type="hidden" name="idEditar" id="idEditar" value="">
<table class="inputT">
		<tr>
			<td>Materia: </td>
			<td>
				<select id="materia">
					<option value="0"> --- Seleccione una materia --- </option>
					<?php
						$con = mysqli_connect("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
						$mat = "SELECT * FROM c_materia";
						$smat = mysqli_query($con,$mat);
					while ($row = mysqli_fetch_array($smat)) {
						?>
					<option value="<?= $row['id_asignatura'] ?>"> 
						<?php echo $row['nombre_asignatura']; ?> 
					</option>
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Profesor: </td>
			<td>
				<select id="profesor">
					<option value="0"> --- Seleccione un profesor --- </option>

					<?php
						$prof = "SELECT * FROM profesor";
						$sprof = mysqli_query($con,$prof);

						while ($row = mysqli_fetch_array($sprof)) {
					?>
					<option value="<?= $row['numero_empleado'] ?>">
						<?php echo $row['nombre']." ".$row['ape_paterno']." ".$row['ape_materno']; ?>
					</option>
				<?php } ?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Grupo: </td>
			<td>
				<select id="grupo">
					<option value="0"> --- Seleccione un grupo --- </option>

					<?php
					$grup = "SELECT * FROM c_grupo";
					$sgrup = mysqli_query($con,$grup);

					while ($row = mysqli_fetch_array($sgrup)) {
					?>
					<option value="<?= $row['id_grupo'] ?>">
						<?php echo $row['nombre_grupo']; ?>
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