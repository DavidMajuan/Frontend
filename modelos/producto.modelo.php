<?php

require_once "conexion.php";

class ModeloProductos{


    static public function mdlMostrarCategorias($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt -> close();

        $stmt =null;



    }

}