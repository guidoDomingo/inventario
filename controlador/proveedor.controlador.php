<?php
	
  class ControladorProveedor{
  	/*=============================================
  	= GUARDAR PROVEEDOR
  	=============================================*/
  	
  	static public function ctrGuardarProveedor(){

  		if(isset($_POST["nuevo_proveedor"])){

  			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevo_proveedor"]) &&
  			   preg_match('/^[0-9]+$/', $_POST["nuevo_telefono"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevo_pais"]) &&
  			   preg_match('/^[0-9-]+$/', $_POST["nuevo_ruc"]) &&
  			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevo_correo"]) && 
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevo_direccion"])){

  				$tabla = "proveedor";
  				$datos = array("nombre" => $_POST["nuevo_proveedor"],
  								"telefono" => $_POST["nuevo_telefono"],
  								"pais" => $_POST["nuevo_pais"],
  								"ruc" => $_POST["nuevo_ruc"],
  								"correo" => $_POST["nuevo_correo"],
  								"direccion" => $_POST["nuevo_direccion"]);

  				$respuesta = ModeloProveedor::mdlGuardarProveedor($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Proveedor registrado",
							  text: "Registro exitoso del proveedor",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "proveedor";
							  } else {
							    window.location = "proveedor";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al ingresar el proveedor",
							  text: "Error al registrar el proveedor",
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
  	= Moatrar CATEGORIA
  	=============================================*/

  	static public function ctrMostrarProveedor($item,$valor){

  		$tabla = "proveedor";
  		$respuesta = ModeloProveedor::mdlMostrarProveedor($tabla,$item,$valor);
  		return $respuesta;
  	}

  	/*=============================================
  	= EDITAR CATEGORIA          =
  	=============================================*/
  	static public function ctrEditarProveedor(){
  		if(isset($_POST["editar_proveedor"])){
  		if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editar_proveedor"]) &&
  			   preg_match('/^[0-9]+$/', $_POST["editar_telefono"]) &&
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editar_pais"]) &&
  			   preg_match('/^[0-9-]+$/', $_POST["editar_ruc"]) &&
  			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editar_correo"]) && 
  			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editar_direccion"])){

  				$tabla = "proveedor";
  				$datos = array("nombre" => $_POST["editar_proveedor"],
  								"telefono" => $_POST["editar_telefono"],
  								"pais" => $_POST["editar_pais"],
  								"ruc" => $_POST["editar_ruc"],
  								"correo" => $_POST["editar_correo"],
  								"id" => $_POST["idProveedor"],
  								"direccion" => $_POST["editar_direccion"]);

  				 $respuesta = ModeloProveedor::mdlEditarProveedor($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Proveedor actualizado ",
							  text: "Registro actualizado correctamente",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "proveedor";
							  } else {
							    window.location = "proveedor";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al actualizar",
							  text: "Error al registrar el proveedor",
							  icon: "warning",
							  buttons: true,
							  dangerMode: true,
							});

						  </script>';
  				}

  			}else{

  				echo '<script>

						swal({
						  title: "Campos invalidos",
						  text: "Unos de los campos tiene datos incorrectos",
						  icon: "warning",
						  buttons: true,
						  dangerMode: true,
						});

					  </script>';
  			}
  		}

  	}	
  	

  	/*=============================================
	BORRAR Proveedor
	=============================================*/

	static public function ctrBorrarProveedor(){

		if(isset($_GET["idProveedor"])){

			$tabla ="proveedor";
			$datos = $_GET["idProveedor"];

			$respuesta = ModeloProveedor::mdlBorrarProveedor($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						   swal({
							  title: "Proveedor borrado ",
							  text: "Registro eliminado correctamente",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "proveedor";
							  } else {
							    window.location = "proveedor";
							  }
							});

					</script>';
			}
		}
		
	}



  }	


?>