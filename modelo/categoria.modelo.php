<?php
	require_once "conexion.php";

	class ModeloCategoria{

		static public function mdlGuardarCategoria($tabla,$datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre_categoria) VALUES (:nombre_categoria)");

			$stmt->bindParam(":nombre_categoria", $datos, PDO::PARAM_STR);

			if($stmt->execute()){

				return "ok";

			}else{

				return "error";
			
			}

			$stmt->close();
			$stmt = null;
		}

		static public function mdlMostrarCategoria($tabla,$item,$valor){

			if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}

		static public function mdlEditarCategoria($tabla,$datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre_categoria = :categoria 
												  WHERE id= :id");

			$stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

			if($stmt->execute()){

				return "ok";

			}else{

				return "error";
			
			}

			$stmt->close();
			$stmt = null;
		}

		/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function mdlBorrarCategoria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
	}
?>