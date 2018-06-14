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

      ?>


    <?php
    $link =  new mysqli("localhost","upiiz_hernandeze","hernandeze");
    
    $bd = "CREATE DATABASE IF NOT EXISTS `curso_de_preparacion` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;";
    mysqli_query($link,$bd);

    $profesor = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`profesor` (
  `numero_empleado` VARCHAR(10) NOT NULL,
  `nombre` VARCHAR(15) NULL,
  `ape_paterno` VARCHAR(10) NULL,
  `ape_materno` VARCHAR(10) NULL,
  `usuario` VARCHAR(10) NOT NULL,
  `passwoord` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`numero_empleado`))";

    mysqli_query($link,$profesor);

     $catMateria = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`c_materia` (
  `id_asignatura` INT NOT NULL AUTO_INCREMENT,
  `nombre_asignatura` VARCHAR(45) NULL,
  PRIMARY KEY (`id_asignatura`))";
    mysqli_query($link,$catMateria);

     
     $subsistema = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`subsistema` (
    `id_subsistema` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(45) NULL,
     PRIMARY KEY (`id_subsistema`))";
    mysqli_query($link,$subsistema);


    $escuela = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`escuela` (
  `id_escuela` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `subsistema_id` INT NOT NULL,
  PRIMARY KEY (`id_escuela`, `subsistema_id`),
  INDEX `fk_escuela_subsistema1_idx` (`subsistema_id` ASC),
  CONSTRAINT `fk_escuela_subsistema1`
    FOREIGN KEY (`subsistema_id`)
    REFERENCES `curso_de_preparacion`.`subsistema` (`id_subsistema`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)";
    mysqli_query($link,$escuela);


  $interesado = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`interesado`(
  `id_interesado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pila` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `a_paterno` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `a_materno` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo_electronico` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_movil` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_fijo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `municipio_id_municipio` int(11) NOT NULL,
  `municipio_estado_id_estado` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `escuela_id_escuela` int(11) NOT NULL,
  `escuela_subsistema_id` int(11) NOT NULL,
   PRIMARY KEY(`id_interesado`))"; 

    mysqli_query($link,$interesado);

  $teresado = "ALTER TABLE `curso_de_preparacion`.`interesado`
  ADD KEY `fk_interesado_municipio1_idx` (`municipio_id_municipio`,`municipio_estado_id_estado`),
  ADD KEY `fk_interesado_escuela1_idx` (`escuela_id_escuela`,`escuela_subsistema_id`)";
    mysqli_query($link,$teresado);


    $catAula = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`c_aula` (
    `id_aula` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id_aula`),
    UNIQUE INDEX `id_edificio_UNIQUE` (`id_aula` ASC))";
    mysqli_query($link,$catAula);

    $catEd = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`c_edificio` (
    `id_edificio` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id_edificio`),
    UNIQUE INDEX `id_edificio_UNIQUE` (`id_edificio` ASC))";
    mysqli_query($link,$catEd);



    $asignatura = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`asignatura` (
  `id_asignatura` INT NOT NULL AUTO_INCREMENT,
  `materia_id_asignatura` INT NOT NULL,
  `profesor_numero_empleado` VARCHAR(10) NOT NULL,
  `c_grupo_id_grupo` INT NOT NULL,
  PRIMARY KEY (`id_asignatura`, `materia_id_asignatura`))";
  

    mysqli_query($link,$asignatura);

    $aasi = "ALTER TABLE `curso_de_preparacion`.`asignatura`
    ADD KEY `fk_asignatura_profesor1_idx` (`profesor_numero_empleado` ASC),
    ADD KEY `fk_asignatura_materia1_idx` (`materia_id_asignatura` ASC),
    ADD KEY `fk_asignatura_c_grupo1_idx` (`c_grupo_id_grupo` ASC)";

    mysqli_query($link,$aasi);

    $caa1 = "ALTER TABLE `curso_de_preparacion`.`asignatura`
    ADD CONSTRAINT `fk_asignatura_materia1`
    FOREIGN KEY (`materia_id_asignatura`)
    REFERENCES `curso_de_preparacion`.`c_materia` (`id_asignatura`)";
    mysqli_query($link,$caa1);

    $caa2 = "ALTER TABLE `curso_de_preparacion`.`asignatura`
    ADD CONSTRAINT `fk_asignatura_profesor1`
    FOREIGN KEY (`profesor_numero_empleado`)
    REFERENCES `curso_de_preparacion`.`profesor` (`numero_empleado`)";
    mysqli_query($link,$caa2);

    $caa3 = "ALTER TABLE `curso_de_preparacion`.`asignatura`
     ADD CONSTRAINT `fk_asignatura_c_grupo1`
    FOREIGN KEY (`c_grupo_id_grupo`)
    REFERENCES `curso_de_preparacion`.`c_grupo` (`id_grupo`)";

    $inHa = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`interesado_has_asignatura` (
  `interesado_id_interesado` INT NOT NULL,
  `asignatura_id_asignatura` INT NOT NULL,
  `asignatura_materia_id_asignatura1` INT NOT NULL,
  PRIMARY KEY (`interesado_id_interesado`, `asignatura_id_asignatura`, `asignatura_materia_id_asignatura1`))";

    mysqli_query($link,$inHa);



    $c_carrera = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`c_carrera` (
    `id_carrera` INT NOT NULL AUTO_INCREMENT,
    `nombre_carrera` VARCHAR(45) NULL,
    PRIMARY KEY (`id_carrera`))";
    mysqli_query($link,$c_carrera);


    $c_pago = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`c_pago` (
    `idpago` INT NOT NULL AUTO_INCREMENT,
    `cantidad` DOUBLE NULL,
    `tipo_documento` VARCHAR(45) NULL,
    PRIMARY KEY (`idpago`))";   
      mysqli_query($link,$c_pago);

    $pago = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`pago` (
  `idpago` INT NOT NULL AUTO_INCREMENT,
  `edo_pago` VARCHAR(1) NOT NULL,
  `edo_documento` VARCHAR(1) NOT NULL,
  `interesado_id_interesado` INT NOT NULL,
  `c_pago_idpago` INT NOT NULL,
  PRIMARY KEY (`idpago`, `interesado_id_interesado`),
  INDEX `fk_pago_interesado1_idx` (`interesado_id_interesado` ASC),
  INDEX `fk_pago_c_pago1_idx` (`c_pago_idpago` ASC),
  CONSTRAINT `fk_pago_interesado1`
    FOREIGN KEY (`interesado_id_interesado`)
    REFERENCES `curso_de_preparacion`.`interesado` (`id_interesado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pago_c_pago1`
    FOREIGN KEY (`c_pago_idpago`)
    REFERENCES `curso_de_preparacion`.`c_pago` (`idpago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)";
    mysqli_query($link,$pago);


    $opcion = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`opcion` (
  `id_opcion` INT NOT NULL AUTO_INCREMENT,
  `interesado_id_interesado` INT NOT NULL,
  `carrera_id` INT NOT NULL,
  PRIMARY KEY (`id_opcion`, `interesado_id_interesado`),
  INDEX `fk_opciones_interesado1_idx` (`interesado_id_interesado` ASC),
  INDEX `fk_opcion_carrera1_idx` (`carrera_id` ASC),
  CONSTRAINT `fk_opciones_interesado1`
    FOREIGN KEY (`interesado_id_interesado`)
    REFERENCES `curso_de_preparacion`.`interesado` (`id_interesado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_opcion_carrera1`
    FOREIGN KEY (`carrera_id`)
    REFERENCES `curso_de_preparacion`.`c_carrera` (`id_carrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)";

     mysqli_query($link,$opcion);

    $admn = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`administrador` (
    `id_administrador` VARCHAR(10) NOT NULL,
    `nombre` VARCHAR(15) NULL,
    `ape_paterno` VARCHAR(10) NULL,
    `ape_materno` VARCHAR(10) NULL,
    `usuario` VARCHAR(10) NOT NULL,
    `passwoord` VARCHAR(8) NOT NULL,
    PRIMARY KEY (`id_administrador`))";
   mysqli_query($link,$admn);


 $cali = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`calificacion` (
  `id_calificacion` INT NOT NULL AUTO_INCREMENT,
  `calificacion` DOUBLE NULL,
  `interesado_has_asignatura_interesado_id_interesado` INT NOT NULL,
  `interesado_has_asignatura_asignatura_id_asignatura` VARCHAR(45) NOT NULL,
  `interesado_has_asignatura_asignatura_materia_id_asignatura1` VARCHAR(15) NOT NULL,
  PRIMARY KEY(`id_calificacion`))";

  mysqli_query($link,$cali); 
  
  $fcali = " ALTER TABLE `curso_de_preparacion`.`calificacion`
        ADD KEY `fk_calificacion_interesado_has_asignatura1_idx`(
              `interesado_has_asignatura_interesado_id_interesado`,
              `interesado_has_asignatura_asignatura_id_asignatura`,
              `interesado_has_asignatura_asignatura_materia_id_asignatura1`)";

  mysqli_query($link,$fcali);


  $municipio = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`municipio` (
  `id_municipio` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `estado_id_estado` VARCHAR(3) NOT NULL,
  PRIMARY KEY (`id_municipio`, `estado_id_estado`))";
  mysqli_query($link,$municipio);
  
  $fmunicipio = "ALTER TABLE `curso_de_preparacion`.`municipio`
  
  ADD KEY `fk_municipio_estado1`(`estado_id_estado`)";
  mysqli_query($link,$fmunicipio);

  $estado = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`estado` (
  `id_estado` VARCHAR(3) NOT NULL,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id_estado`))";
  mysqli_query($link,$estado);

   $hori = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`horario` (
  `id_horario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_horario`),
  UNIQUE INDEX `id_edificio_UNIQUE` (`id_horario` ASC))";
  mysqli_query($link,$hori);
    


    $gru = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`c_grupo` (
  `id_grupo` INT NOT NULL AUTO_INCREMENT,
  `nombre_grupo` VARCHAR(45) NOT NULL,
  `c_aula_id_aula` INT NOT NULL,
  `c_edificio_id_edificio` INT NOT NULL,
  `horario_id_horario` INT NOT NULL,
  PRIMARY KEY (`id_grupo`))";

  mysqli_query($link,$gru);
  $fgru = "ALTER TABLE `curso_de_preparacion`.`c_grupo` 
  ADD KEY `fk_c_grupo_c_aula1_idx` (`c_aula_id_aula` ASC),
  ADD KEY `fk_c_grupo_c_edificio1_idx` (`c_edificio_id_edificio` ASC),
  ADD KEY `fk_c_grupo_horario1_idx` (`horario_id_horario` ASC)";
    mysqli_query($link,$fgru); 

    $cgru1 = "
    ALTER TABLE `curso_de_preparacion`.`c_grupo` 
    ADD CONSTRAINT `fk_c_grupo_c_aula1`
    FOREIGN KEY (`c_aula_id_aula`)
    REFERENCES `curso_de_preparacion`.`c_aula` (`id_aula`)";

    mysqli_query($link,$cgru1);

    $cgru2= " 
    ALTER TABLE `curso_de_preparacion`.`c_grupo`
    ADD CONSTRAINT `fk_c_grupo_c_edificio1`
    FOREIGN KEY (`c_edificio_id_edificio`)
    REFERENCES `curso_de_preparacion`.`c_edificio` (`id_edificio`)";
    mysqli_query($link,$cgru2);

    $cgru3="
    ALTER TABLE `curso_de_preparacion`.`c_grupo`
    ADD CONSTRAINT `fk_c_grupo_horario1`
    FOREIGN KEY (`horario_id_horario`)
    REFERENCES `curso_de_preparacion`.`horario` (`id_horario`)";
    mysqli_query($link,$cgru3);




$asis = "CREATE TABLE IF NOT EXISTS `curso_de_preparacion`.`asistencia` (
  `id_fecha` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `edo_asist` INT NULL,
  `interesado_has_asignatura_interesado_id_interesado` INT NOT NULL,
  `interesado_has_asignatura_asignatura_id_asignatura` VARCHAR(45) NOT NULL,
  `interesado_has_asignatura_asignatura_materia_id_asignatura1` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_fecha`))";

$asisA1 = "ALTER TABLE `curso_de_preparacion`.`asistencia`
          ADD KEY `fk_asistencia_interesado_has_asignatura1_idx` (`interesado_has_asignatura_interesado_id_interesado` ASC)";

$asisA2 = "ALTER TABLE `curso_de_preparacion`.`asistencia`
          ADD KEY `fk_asistencia_interesado_has_asignatura2_idx` (     `interesado_has_asignatura_asignatura_id_asignatura` ASC)";

$asisA3 = "ALTER TABLE `curso_de_preparacion`.`asistencia`
          ADD KEY `fk_asistencia_interesado_has_asignatura3_idx` (`interesado_has_asignatura_asignatura_materia_id_asignatura1` ASC)";

$asisC1 = "ALTER TABLE `curso_de_preparacion`.`asistencia`
          ADD CONSTRAINT `fk_asistencia_interesado_has_asignatura1`
          FOREIGN KEY (`interesado_has_asignatura_interesado_id_interesado`)
          REFERENCES `curso_de_preparacion`.`interesado_has_asignatura` (`interesado_id_interesado`)";


    mysqli_query($link,$asis);
    mysqli_query($link,$asisA1);
    mysqli_query($link,$asisA2);
    mysqli_query($link,$asisA3);
    mysqli_query($link,$asisC1);
    
    ?> 