<?php

class Conexion{

    public function conectar(){

<<<<<<< HEAD
        $link = new PDO("mysql:host=localhost;dbname=ilidannutrition",
=======
<<<<<<< HEAD
        $link = new PDO("mysql:host=localhost;dbname=ilidannutrition",
=======
        $link = new PDO("mysql:host=localhost;dbname=ilidanNutritionCieza",
>>>>>>> 11b452cb999827bb84dcae3666b68f4865318eac
>>>>>>> 4c82ba31c23949865dc684e4449cc3f99cea10dd
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

    
}

}