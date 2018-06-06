<?php
	
    $pagina = isset($_GET['link']) ? strtolower($_GET['link']) : 'inicio';
    // El fragmento de html que contiene la cabecera de nuestra web
    require_once 'paginas/header.php';


    /* Estamos considerando que el parámetro enviando tiene el mismo nombre del archivo a cargar, si este no fuera así
    se produciría un error de archivo no encontrado */
    ?>

    <div id="cuerpo_inv">
    <div id="cuerpo_fondo"></div>
    <div id="cuerpo_cont">   
    	<?php
    require_once 'paginas/' . $pagina . '.php';
    ?>
    </div>
    
    </div>
    
    <?php
    
      require_once 'paginas/pie.php';