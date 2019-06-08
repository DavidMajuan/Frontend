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

    $icono = ControladorPlantilla::ctrEstiloPlantilla();

    echo '<link rel="icon" href="http://localhost:8080/backend/'.$icono["icono"].'">';

    ?>



    <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">

    <link rel="stylesheet" href="vistas/css/plugins/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
  
    <link rel="stylesheet" href="vistas/css/plantilla.css">

    <link rel="stylesheet" href="vistas/css/cabezote.css">
    
    <script src="vistas/js/plugins/jquery.min.js"></script>

    <script src="vistas/js/plugins/bootstrap.min.js"></script>
    
</head>
<body>

<?php
    
/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

?>

<script src="vistas/js/cabezote.js"></script>
<script src="vistas/js/plantilla.js"></script>
</body>
</html>