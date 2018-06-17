<?php 
  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
?> 
<div id="divsito"> <h1>Menú de Docentes</h1> </div>
<link rel="stylesheet" type="text/css" href="estilos/barra_catalogos.css">
  <div class="topnav">
  
  <a href="?link=pagos" name="pagos" id="pagos">Pagos</a>
  <a href="" name="grupos" id="grupos">Grupos</a>
 
  <div class="dropdown">
  
  </div>
  <a href="?link=out" name="salir" id="salir">Salir</a>
</form>
</div>