<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/producto.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/usuarios.controladorPaciente.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/producto.modelo.php";
require_once "modelos/slide.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modeloPaciente.php";


require_once "modelos/rutas.php";

require_once "extensiones/PHPMailer/PHPMailerAutoload.php";



$plantilla = new ControladorPlantilla();

$plantilla -> plantilla();




   


       



   

    



   







