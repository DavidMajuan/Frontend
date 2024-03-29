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
    
    session_start();

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

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
  
    <!--=====================================
        HOJAS DE ESTILOS PERSONALIZADAS
    ======================================-->
    
    
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/infoproducto.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/perfil.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/perfilP.css">

    <!--=====================================
        PLUGINS DE JAVASCRIPT
    ======================================-->
    
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>

    
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
$infoProducto = null;

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
	URL'S AMIGABLES DE PRODUCTOS
	=============================================*/

	$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);
	
	if($rutas[0] == $rutaProductos["ruta"]){

		$infoProducto = $rutas[0];

	}
    

   /*=============================================
    LISTA BLANCA DE URL'S AMIGABLES (aqui se agregan todas la paginas)
    =============================================*/

   
	if($ruta != null || $rutas[0] == "consultas-gratuitas" || $rutas[0] == "nutricionistas-mas-solicitados" || $rutas[0] == "lo-mas-visto"){

		include "modulos/poductos.php";

	}else if($infoProducto != null){

		include "modulos/infoproducto.php";

	}else if($rutas[0] == "buscador" || $rutas[0] == "verificar" || $rutas[0] == "salir" || $rutas[0] == "salirP"  || $rutas[0] == "perfil" || $rutas[0] == "perfilPaciente") {

		include "modulos/".$rutas[0].".php";

	}else{

		include "modulos/error404.php";

	}
  
}else{
    include "modulos/slide.php";
    include "modulos/destacados.php";

}

?>

<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
    <!--=====================================
        JAVASCRIPT PERSONALIZADO
    ======================================-->

<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
<script src="<?php echo $url; ?>vistas/js/infoproducto.js"></script>
<script src="<?php echo $url; ?>vistas/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vistas/js/usuariosP.js"></script>
<script src="<?php echo $url; ?>vistas/js/registroFacebook.js"></script>
<script src="<?php echo $url; ?>vistas/js/vcampos.js"></script>

</body>
</html>