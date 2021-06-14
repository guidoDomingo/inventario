<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("pgsql:host=localhost;dbname=inventario",
			            "postgres",
			            "admin");

		$link->exec("set names utf8");

		return $link;

	}
	
}

