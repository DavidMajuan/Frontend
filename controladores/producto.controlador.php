<?php

class ControladorProductos{

    public function ctrMostrarCategorias(){

        $tabla = "categorias";

        $respuesta = ModeloProducto::mdlMostrarCtaegorias($tabla);

        return $respuesta;



    }


}