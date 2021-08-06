<?php
	require_once "conexion.php";

	class ModeloEquipo{

		static public function mdlGuardarEquipo($tabla,$datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id, nombre_equipo,marca,modelo,estado,descripcion,stock,codigo,id_categoria,id_proveedor) VALUES (:id,:nombre_equipo,:marca,:modelo,:estado,:descripcion,:stock,:codigo,:id_categoria,:id_proveedor)");

			$idEquipo = Conexion::conectar()->prepare("SELECT f_numero_maximo() ;");
			$idEquipo -> execute();
			$id = $idEquipo -> fetch();

			//var_dump($id);
			$stmt->bindParam(":id", $id["f_numero_maximo"] , PDO::PARAM_INT);
			$stmt->bindParam(":nombre_equipo", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$stmt->bindParam(":estado", intval($datos["estado"]), PDO::PARAM_INT);
			$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$stmt->bindParam(":stock", intval($datos["stock"]), PDO::PARAM_INT);
			$stmt->bindParam(":id_categoria", intval($datos["id_categoria"]), PDO::PARAM_INT);
			$stmt->bindParam(":id_proveedor", intval($datos["id_proveedor"]), PDO::PARAM_INT);
			$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);

			
			if($stmt->execute()){

				return "ok";

			}else{

				return "error";
			
			}

			$stmt->close();
			$stmt = null;
		}

		static public function mdlMostrarEquipo($tabla,$item,$valor){

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

		static public function mdlEditarEquipo($tabla,$datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  nombre_equipo = :nombre_equipo ,marca = :marca , modelo = :modelo ,estado = :estado , descripcion = :descripcion ,stock = :stock, codigo = :codigo WHERE id = :id");


			$stmt->bindParam(":id", $datos["id"] , PDO::PARAM_STR);
			$stmt->bindParam(":nombre_equipo", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
			$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
			$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);

			if($stmt->execute()){

				return "ok";

			}else{

				return "error";
			
			}

			$stmt->close();
			$stmt = null;
		}

		/*=============================================
		ACTUALIZAR EQUIPO
		=============================================*/

		static public function mdlActualizarEquipo($tabla, $item1, $valor1, $item2, $valor2){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

			if($stmt -> execute()){

				return "ok";
			
			}else{

				return "error";	

			}

			$stmt -> close();

			$stmt = null;

		}

			/*=============================================
		BORRAR CATEGORIA
		=============================================*/

		static public function mdlBorrarEquipo($tabla, $datos){

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