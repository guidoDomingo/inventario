<?php
	
  class ControladorCategoria{
  	/*=============================================
  	= GUARDAR CATEGORIA
  	=============================================*/
  	
  	static public function ctrGuardarCategoria(){

  		if(isset($_POST["nuevo_categoria"])){

  			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevo_categoria"])){

  				$tabla = "categoria";
  				$datos = $_POST["nuevo_categoria"];

  				$respuesta = ModeloCategoria::mdlGuardarCategoria($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Categoria registrado",
							  text: "Registro exitoso de la categoria",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "categorias";
							  } else {
							    window.location = "categorias";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al ingresar la categoria",
							  text: "Error al registrar la categoria",
							  icon: "warning",
							  buttons: true,
							  dangerMode: true,
							});

						  </script>';
  				}

  			}else{

  				echo '<script>

						swal({
						  title: "Solo puede ingresar letras o números",
						  text: "El campo solo acepta números y letras",
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

  	static public function ctrMostrarCategoria($item,$valor){

  		$tabla = "categoria";
  		$respuesta = ModeloCategoria::mdlMostrarCategoria($tabla,$item,$valor);
  		return $respuesta;
  	}

  	/*=============================================
  	= EDITAR CATEGORIA          =
  	=============================================*/
  	static public function ctrEditarCategoria(){
  		if(isset($_POST["editar_categoria"])){

  			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editar_categoria"])){

  				$tabla = "categoria";
  				$datos = array('categoria' => $_POST["editar_categoria"],
  								'id' => $_POST["idCategoria"]);

  				$respuesta = ModeloCategoria::mdlEditarCategoria($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Categoria actualizado ",
							  text: "Registro actualizado correctamente",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "categorias";
							  } else {
							    window.location = "categorias";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al actualizar",
							  text: "Error al registrar la categoria",
							  icon: "warning",
							  buttons: true,
							  dangerMode: true,
							});

						  </script>';
  				}

  			}else{

  				echo '<script>

						swal({
						  title: "Solo puede ingresar letras o números",
						  text: "El campo solo acepta números y letras",
						  icon: "warning",
						  buttons: true,
						  dangerMode: true,
						});

					  </script>';
  			}
  		}
  	}

  	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function ctrBorrarCategoria(){

		if(isset($_GET["idCategoria"])){

			$tabla ="categoria";
			$datos = $_GET["idCategoria"];

			$respuesta = ModeloCategoria::mdlBorrarCategoria($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						   swal({
							  title: "Categoria borrado ",
							  text: "Registro eliminado correctamente",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "categorias";
							  } else {
							    window.location = "categorias";
							  }
							});

					</script>';
			}
		}
		
	}



  }	


?>