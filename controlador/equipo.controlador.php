<?php
	
  class ControladorEquipo{
  	/*=============================================
  	= GUARDAR EQUIPO
  	=============================================*/
  	
  	static public function ctrGuardarEquipo(){

  		if(isset($_POST["nuevo_equipo"])){

  			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["nuevo_equipo"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["nuevo_marca"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["nuevo_modelo"]) &&
  			   preg_match('/^[0-9]+$/', $_POST["nuevo_estado"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["nuevo_descripcion"]) &&
  			   preg_match('/^[0-9]+$/', $_POST["nuevo_stock"]) && 
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["nuevo_codigo"])){

  				$tabla = "equipo";
  				$datos = array("nombre" => $_POST["nuevo_equipo"],
  								"marca" => $_POST["nuevo_marca"],
  								"modelo" => $_POST["nuevo_modelo"],
  								"descripcion" => $_POST["nuevo_descripcion"],
  								"estado" => $_POST["nuevo_estado"],
  								"id_categoria" => $_POST["nuevo_categoria"],
  								"id_proveedor" => $_POST["nuevo_proveedor"],
  								"stock" => $_POST["nuevo_stock"],
  								"codigo" => $_POST["nuevo_codigo"]);

  				$respuesta = ModeloEquipo::mdlGuardarEquipo($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Equipo registrado",
							  text: "Registro exitoso del equipo",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "equipos";
							  } else {
							    window.location = "equipos";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al ingresar el equipo",
							  text: "Error al registrar el equipo",
							  icon: "warning",
							  buttons: true,
							  dangerMode: true,
							});

						  </script>';
  				}

  			}else{

  				echo '<script>

						swal({
						  title: "Campo invalido",
						  text: "Datos incorrectos de los campos de equipo",
						  icon: "warning",
						  buttons: true,
						  dangerMode: true,
						});

					  </script>';
  			}
  		}
  	}

  	 /*=============================================
  	= Moatrar EQUIPO
  	=============================================*/

  	static public function ctrMostrarEquipo($item,$valor){

  		$tabla = "equipo";
  		$respuesta = ModeloEquipo::mdlMostrarEquipo($tabla,$item,$valor);
  		return $respuesta;
  	}

  	/*=============================================
  	= EDITAR EQUIPO         =
  	=============================================*/
  	static public function ctrEditarEquipo(){
  		
  		if(isset($_POST["editar_equipo"])){

  			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["editar_equipo"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["editar_marca"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["editar_modelo"]) &&
  			   preg_match('/^[0-9]+$/', $_POST["editar_estado"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_\-\ ]+$/', $_POST["editar_descripcion"]) &&
  			   preg_match('/^[0-9]+$/', $_POST["editar_stock"]) && 
  			   preg_match('/^[0-9]+$/', $_POST["editar_codigo"])){

  				$tabla = "equipo";
  				$datos = array("nombre" => $_POST["editar_equipo"],
  								"marca" => $_POST["editar_marca"],
  								"modelo" => $_POST["editar_modelo"],
  								"estado" => $_POST["editar_estado"],
  								"descripcion" => $_POST["editar_descripcion"],
  								"stock" => $_POST["editar_stock"],
  								"id" => $_POST["idEquipo"],
  								"codigo" => $_POST["editar_codigo"]);

  				$respuesta = ModeloEquipo::mdlEditarEquipo($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Equipo actualizado",
							  text: "Registro actualizado del equipo",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "equipos";
							  } else {
							    window.location = "equipos";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al actualizar el equipo",
							  text: "Error al actualizar el equipo",
							  icon: "warning",
							  buttons: true,
							  dangerMode: true,
							});

						  </script>';
  				}

  			}else{

  				echo '<script>

						swal({
						  title: "Campo invalido",
						  text: "Datos incorrectos",
						  icon: "warning",
						  buttons: true,
						  dangerMode: true,
						});

					  </script>';
  			}
  		}

  	}	
  	

  	/*=============================================
	BORRAR EQUIPO
	=============================================*/

	static public function ctrBorrarEquipo(){

		if(isset($_GET["idEquipo"])){

			$tabla ="equipo";
			$datos = $_GET["idEquipo"];

			$respuesta = ModeloEquipo::mdlBorrarEquipo($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						   swal({
							  title: "Equipo borrado ",
							  text: "Registro eliminado correctamente",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "equipos";
							  } else {
							    window.location = "equipos";
							  }
							});

					</script>';
			}
		}
		
	}



  }	


?>