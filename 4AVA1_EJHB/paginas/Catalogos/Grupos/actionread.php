<?php
	//1.Conexión	
	$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","curso_de_preparacion");
	
	//2.
	$qry = " SELECT
    				g.id_grupo,
    				g.nombre_grupo as grupo,
    				g.c_edificio_id_edificio,
    				g.c_aula_id_aula,
    				g.horario_id_horario,
    				e.id_edificio,
    				e.nombre as ed,
    				a.id_aula,
    				a.nombre as au,
    				h.id_horario,
   					h.nombre as hor
    			FROM
    			c_grupo as g
				JOIN c_edificio as e
					ON g.c_edificio_id_edificio = e.id_edificio

				JOIN c_aula as a 
					ON g.c_aula_id_aula = a.id_aula

				JOIN horario as h
					ON g.horario_id_horario = h.id_horario";
	//
	$resultado = mysqli_query($Link,$qry);
	//	

	echo "<table class='outputT'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Grupo</td>";
	echo "<td>Edificio</td>";
	echo "<td>Aula</td>";
	echo "<td>Horario</td>";
	echo "<td>Acción</td>";
	echo "</tr>";
	echo "</thead>";
	while($registro = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$registro['grupo']."</td>";
		echo "<td>".$registro['ed']."</td>";
		echo "<td>".$registro['au']."</td>";
		echo "<td>".$registro['hor']."</td>";
		$X = "<a href='javascript:void(0);' onclick='actionDeleteAJAX(".$registro['id_grupo'].");'>X</a>";
		$A = "<a href='javascript:void(0);' onclick='actionGetDataAJAX(".$registro['id_grupo'].");'>A</a>";
		echo "<td>[".$X."|".$A."]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>