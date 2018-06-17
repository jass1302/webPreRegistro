<?php 
  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
?> 
<div id="divsito"> <h1>Menú de Administrador</h1> </div>
<link rel="stylesheet" type="text/css" href="estilos/barra_catalogos.css">
  <div class="topnav">
  
  <a href="?link=pagos" name="pagos" id="pagos">Pagos</a>
  <a href="?link=asignatura" name="grupos" id="grupos">Grupos</a>
  <a href="?link=email" name="email" id="email">Email</a>
  <a href="?link=mensajeria" name="mensajeria" id="mensajeria">Mensajería</a>
  <a href="?link=reporte" name="reportes" id="reportes">Reportes</a>
  <div class="dropdown">
    <button class="dropbtn">Catalogos</button>
    <div class="dropdown-content">
      <a href="?link=pago" name="" id="" value = "">Pagos</a>
      <a href="?link=edificios" name="" id="" value = "">Edificios</a>
      <a href="?link=aulas" name="">Aulas</a>
      <a href="?link=horarios" name="" id="" value = "">Horarios</a>
      <a href="?link=grupos" name="" id="" value = "">Grupos</a>
      <a href="?link=materias" name="" id="" value = "">Materias</a>
      <a href="?link=docentes" name="" id="" value = "">Docentes</a>
    </div>
  </div>
  <a href="?link=out" name="salir" id="salir">Salir</a>
</form>
</div>