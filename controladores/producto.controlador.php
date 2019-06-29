<?php

class ControladorProductos{

    /*=================================================================
    MOSTRAR CATEGORIAS
    =================================================================*/

   static public function ctrMostrarCategorias($item, $valor){

        $tabla = "categorias";

        $respuesta = ModeloProductos::mdlMostrarCategorias($tabla,$item,$valor);

        return $respuesta;



    }



    /*=================================================================
    MOSTRAR SUBCATEGORIAS
    =================================================================*/

   static public function ctrMostrarSubcategorias($id){

        $tabla = "subcategorias";

        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $id);

        return $respuesta;



    }


}