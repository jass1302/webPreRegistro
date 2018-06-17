<?php
	//1.Conexión	
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	//2.
	$qry = "SELECT 
			t1.id_asignatura as id, t1.materia_id_asignatura, 
			t1.profesor_numero_empleado, t1.c_grupo_id_grupo, 
			mat.id_asignatura, mat.nombre_asignatura as materia,
			prof.numero_empleado, prof.nombre as n1, prof.ape_paterno as n2, 
			prof.ape_materno as n3, g.id_grupo, g.nombre_grupo as grupo
			
			FROM asignatura as t1

			JOIN c_materia as mat
			ON t1.materia_id_asignatura = mat.id_asignatura

			JOIN profesor as prof
			ON t1.profesor_numero_empleado = prof.numero_empleado

			JOIN c_grupo as g
			ON t1.c_grupo_id_grupo = g.id_grupo";
	//
	$resultado = mysqli_query($Link,$qry);
	//	

	echo "<table class='outputT'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Materia</td>";
	echo "<td>Profesor</td>";
	echo "<td>Grupo</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	echo "</thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['materia']."</td>";
		echo "<td>".$registro['n1']." ".$registro['n2']." ".$registro['n3']."</td>";
		echo "<td>".$registro['grupo']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['id'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['id'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>