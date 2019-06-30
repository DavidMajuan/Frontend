<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="title" content="ilidanNutrition">

    <meta name="description" content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Ut saepe doloribus nisi totam distinctio.">

    <meta name="Keyword" content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Ut saepe doloribus nisi totam distinctio.">

    <title>ilidanNutrition</title>

    <?php

    $servidor = Ruta::ctrRutaServidor();

    $icono = ControladorPlantilla::ctrEstiloPlantilla();

    echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">';

    
    /*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
	=============================================*/
		
        $url = Ruta::ctrRuta();
       
    
    
    ?>



    <!--=====================================
        PLUGINS DE CSS
    ======================================-->

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
  
    <!--=====================================
        HOJAS DE ESTILOS PERSONALIZADAS
    ======================================-->
    
    
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">

    <!--=====================================
        PLUGINS DE JAVASCRIPT
    ======================================-->
    
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
    
</head>
<body>

<?php
    
/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DINAMICO
=============================================*/

$rutas = array();
$ruta = null; 


if(isset($_GET["ruta"])){

    $rutas = explode("/", $_GET["ruta"]);

    $item ="ruta";

    $valor = $rutas[0];

    /*=============================================
    URL'S AMIGABLES DE CATEGORIAS
    =============================================*/

    $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

   
    if($rutas[0] == $rutaCategorias["ruta"]){

    $ruta = $rutas[0];


   }

    /*=============================================
     URL'S AMIGABLES DE SUBCATEGORIAS
    =============================================*/

    $rutasubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

    foreach ($rutasubCategorias as $key => $value) {

        if($rutas[0] == $value["ruta"]){

            $ruta = $rutas[0];
        
        
           }

    }

    

   /*=============================================
    LISTA BLANCA DE URL'S AMIGABLES (aqui se agregan todas la paginas)
    =============================================*/

   if($rutas != null){

        include "modulos/poductos.php";

   }else{
   
    include "modulos/error404.php";

   }

   /* if($_GET["ruta"] == "consultas-gratuitas"){
        include "modulos/poductos.php";
    }
    if($_GET["ruta"] == "lo-mas-solicitado"){
        include "modulos/poductos.php";
    }
    if($_GET["ruta"] == "lo-mas-visto"){
        include "modulos/poductos.php";
    }
*/
}else{
    include "modulos/slide.php";
    include "modulos/destacados.php";

}

?>


    <!--=====================================
        JAVASCRIPT PERSONALIZADO
    ======================================-->

<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
<script src="<?php echo $url; ?>vistas/js/vcampos.js"></script>


</body>
</html>