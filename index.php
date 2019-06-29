<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/producto.controlador.php";
require_once "modelos/plantilla.modelo.php";
require_once "modelos/producto.modelo.php";

require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();

$plantilla -> plantilla();
