<?php
	$VarValorCajaMateria="";
	$VarValoR = "Registrar";
	$VaridEditar = 0;
	

	//1.-Conexión, 2. - Seleccionar la base de datos
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
	//2. Query para crear tabla
	//mysqli_query($Link,"DROP TABLE materia");
	$tabla = "CREATE TABLE IF NOT EXISTS `materia` ( `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  											   `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL)";

	mysqli_query($Link,$tabla);
	//3.-Crear la cadena para el Query = Inserción
	//En caso de querer insertar un nuevo registro
	//Deben de existir las variables = nombre, apaterno
	
	//AGREGAR
	if ( isset($_POST['idEditar']) && isset($_POST['nombre']) ) 
	{

		if ($_POST['idEditar']>0) {
			$VarValoR = "Registrarrrr";
	$QueryAct = "UPDATE materia SET nombre='".$_POST['nombre']."' WHERE id = ".$_POST['idEditar'];
		mysqli_query($Link,$QueryAct);

		//Evitar reenvio de formulario
		header("Location:paginas/prueba.php");		
	}
		
	
	else if(isset($_POST['nombre'])){	
		$VarValoR = "Registrar";
		$varNombre  = $_POST['nombre'];
	
	    $QueryInsercion ="INSERT INTO `materia` (`id`, `nombre`) VALUES (NULL, '".$varNombre."')";

		//4.-Ejecutar la Query = Inserción
	    mysqli_query($Link,$QueryInsercion);

	    //EVITAR EL REENVIO DEL FORMULARIO
	    header("Location:paginas/prueba.php");
	    
	}
}
	//ELIMINAR
	if(isset($_GET['id'])&&isset($_GET['accion'])){
		if($_GET['accion']=='eliminar'){
			
			$QueryEliminar="DELETE FROM `materia` WHERE `materia`.`id` = ".$_GET['id'];

			mysqli_query($Link,$QueryEliminar);

		}elseif ($_GET['accion']=='editar') {
			
			//PRIMER PASO = ACTUALIZAR

			//Cambio de nombre a editar
			$VarValoR = "Editar";
			
			$QueryMateria = "SELECT nombre FROM `materia` WHERE `materia`.`id` = ".$_GET['id'];
			
			//Conjunto de registros = 1
			$UnaMateria=mysqli_query($Link,$QueryMateria);

			//Obtengo un solo registro
			$UnSoloRegistro = mysqli_fetch_array($UnaMateria);
			
			//Se lo asigno a la variable 
			$VarValorCajaMateria=$UnSoloRegistro['nombre'];

			$VaridEditar = $_GET['id'];
		}
	}

	
	//5.-Crear la cadena para el Query = Consulta
	$QueryConsulta="SELECT * FROM materia";

	//6.-Ejecutar la Query = Consulta = Tabla
	$TodosLosRegistros = mysqli_query($Link,$QueryConsulta);

	
?>
<link rel="stylesheet" type="text/css" href="estilos/catalogos.css">
<div id="cuerpo_inv">
		<div id="cuerpo_fondo"></div>

		<div id="cuerpo_cont">
<script src="validar.js" type="text/javascript"></script>
<form action="" method="post" onsubmit="return validaFormulario();">
	<input type="hidden" name="idEditar" value="<?php echo $VaridEditar;?>">
	
	<table class="t1">
		<tr>
			<td>Nombre materia:</td>
			<td><input type="text" name="nombre" id="nombre" value="<?php echo $VarValorCajaMateria;?>" placeholder = "Digite el nombre de la materia" ></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="Registrar" value="<?php echo $VarValoR;?>"></td>
			<td><input type="reset" name="Limpiar" value="Limpiar"></td>
		</tr>
	</table>
</form>

<?php
	//7.-Recuperamos registro x registro
	//Generar de manera dinamica la tabla en HTML
	echo "<br />";
	echo "<p id='error'></p>";
	echo "<table id='t2'>";
		//Es estático
		echo "<tr>";
			echo "<td>Nombre</td>";
			echo "<td>Acciones</td>";
		echo "</tr>";

		//Lo siguientes renglones son dinámicos
		//Tengo que hacer un ciclo registro x registro
		while ($UnSoloRegistro = mysqli_fetch_array($TodosLosRegistros)){
			
			$id = $UnSoloRegistro['id'];
			$NCompleto = $UnSoloRegistro['nombre'];
			//? Inician los parametros
			//& Separamos los parametros

			echo "<tr>";
				echo "<td>".$NCompleto."</td>";
$X="<a href='prueba.php?id=".$id."&accion=eliminar'>X</a>";
$A="<a href='prueba.php?id=".$id."&accion=editar'>A</a>";
				echo "<td>[ ".$X." | ".$A." ]</td>";
			echo "</tr>";
		}

	echo "</table>";
?>
		</div>
	</div>

