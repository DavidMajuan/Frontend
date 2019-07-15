<?php

class ControladorPlantilla{

    /*=============================================
	LLAMAMOS LA PLANTILLA
	=============================================*/

    public function plantilla(){
        
        include "vistas/plantilla.php";

	}
	
	
    /*=============================================
	LLAMAMOS LA PLANTILLA PERFILES
	=============================================*/

    public function plantillaPerfil(){
        
        include "vistas/plantillaPerfiles.php";

    }

    /*=============================================
	TRAEMOS LOS ESTILOS DINÁMICOS DE LA PLANTILLA
	=============================================*/

	public function ctrEstiloPlantilla(){

		$tabla = "plantilla";

		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;
	}    

    
}