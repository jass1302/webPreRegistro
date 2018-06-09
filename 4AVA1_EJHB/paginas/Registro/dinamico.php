<?php
$Link =  new mysqli("localhost","upiiz_hernandeze","hernandeze","upiiz_hernandeze");
echo "<tr><td>Primera Opción </td>";
echo "<td><select name='carrera1' id='carrera1'>";
echo "<option value='0'>Seleccione una carrera</option>";

$QueryCCar="SELECT * FROM carrera";
//6.-Ejecutar la Query = Consulta = Tabla 
$TodasLasCarreras = mysqli_query($Link,$QueryCCar);
//Obtener todos los registros de la tabla
while ($Carrer= mysqli_fetch_array($TodasLasCarreras, MYSQLI_BOTH))
{
echo "<option value=".$Carrer['id_carrera'].">".utf8_encode($Carrer['nombre_carrera'])."</option>";
									}
								
echo "</select> </td></tr><tr>";
echo "<tr><td>Segunda Opción </td>";
echo "<td><select name='carrera2' id='carrera2'>";
echo "<option value='0'>Seleccione una carrera</option>";

$QueryCCar="SELECT * FROM carrera";
//6.-Ejecutar la Query = Consulta = Tabla 
$TodasLasCarreras = mysqli_query($Link,$QueryCCar);
//Obtener todos los registros de la tabla
while ($Carrer= mysqli_fetch_array($TodasLasCarreras, MYSQLI_BOTH))
{
echo "<option value=".$Carrer['id_carrera'].">".utf8_encode($Carrer['nombre_carrera'])."</option>";
									}
								
echo "</select> </td></tr><tr>";
echo "<tr><td>Tercera Opción </td>";
echo "<td><select name='carrera3' id='carrera3'>";
echo "<option value='0'>Seleccione una carrera</option>";

$QueryCCar="SELECT * FROM carrera";
//6.-Ejecutar la Query = Consulta = Tabla 
$TodasLasCarreras = mysqli_query($Link,$QueryCCar);
//Obtener todos los registros de la tabla
while ($Carrer= mysqli_fetch_array($TodasLasCarreras, MYSQLI_BOTH))
{
echo "<option value=".$Carrer['id_carrera'].">".utf8_encode($Carrer['nombre_carrera'])."</option>";
									}
								
echo "</select> </td></tr><tr>";

?>