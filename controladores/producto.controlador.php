<?php

class ControladorProductos{

    /*=================================================================
    MOSTRAR CATEGORIAS
    =================================================================*/

    public function ctrMostrarCategorias(){

        $tabla = "categorias";

        $respuesta = ModeloProductos::mdlMostrarCategorias($tabla);

        return $respuesta;



    }



    /*=================================================================
    MOSTRAR SUBCATEGORIAS
    =================================================================*/

    public function ctrMostrarSubcategorias($id){

        $tabla = "subcategorias";

        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $id);

        return $respuesta;



    }


}