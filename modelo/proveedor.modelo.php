<?php
	require_once "conexion.php";

	class ModeloProveedor{

		static public function mdlGuardarProveedor($tabla,$datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,telefono,pais,ruc,correo,direccion) VALUES (:nombre,:telefono,:pais,:ruc,:correo,:direccion)");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
			$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
			$stmt->bindParam(":ruc", $datos["ruc"], PDO::PARAM_STR);
			$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
			$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);

			if($stmt->execute()){

				return "ok";

			}else{

				return "error";
			
			}

			$stmt->close();
			$stmt = null;
		}

		static public function mdlMostrarProveedor($tabla,$item,$valor){

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

		static public function mdlEditarProveedor($tabla,$datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre , telefono = :telefono, pais = :pais , ruc = :ruc , correo = :correo , direccion = :direccion WHERE id = :id ");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
			$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
			$stmt->bindParam(":ruc", $datos["ruc"], PDO::PARAM_STR);
			$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
			$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

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

	static public function mdlBorrarProveedor($tabla, $datos){

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