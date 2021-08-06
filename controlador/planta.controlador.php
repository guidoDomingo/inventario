<?php
	
  class ControladorPlanta{
  	/*=============================================
  	= GUARDAR PLANTA
  	=============================================*/
  	
  	static public function ctrGuardarPlanta(){

  		if(isset($_POST["nuevo_planta"])){

  			if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevo_planta"])){

  				$tabla = "planta";
  				$datos = $_POST["nuevo_planta"];

  				$respuesta = ModeloPlanta::mdlGuardarPlanta($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Planta registrado",
							  text: "Registro exitoso de la planta industrial",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "plantas";
							  } else {
							    window.location = "plantas";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al ingresar la planta",
							  text: "Error al registrar la planta",
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
  	= Moatrar planta
  	=============================================*/

  	static public function ctrMostrarPlanta($item,$valor){

  		$tabla = "planta";
  		$respuesta = ModeloPlanta::mdlMostrarPlanta($tabla,$item,$valor);
  		return $respuesta;
  	}

  	/*=============================================
  	= EDITAR PLANTA        =
  	=============================================*/
  	static public function ctrEditarPlanta(){
  		if(isset($_POST["editar_planta"])){

  			if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editar_planta"])){

  				$tabla = "planta";
  				$datos = array('nombre' => $_POST["editar_planta"],
  								'id' => $_POST["idPlanta"]);

  				$respuesta = ModeloPlanta::mdlEditarPlanta($tabla,$datos);

  				if($respuesta == "ok"){
  					echo '<script>

						 swal({
							  title: "Planta actualizado ",
							  text: "Registro actualizado correctamente",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "plantas";
							  } else {
							    window.location = "plantas";
							  }
							});
					

						</script>';
  				}else{
  					echo '<script>
  				
							swal({
							  title: "Error al actualizar",
							  text: "Error al actualizar la planta insdustrial",
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
	BORRAR PLANTA
	=============================================*/

	static public function ctrBorrarPlanta(){

		if(isset($_GET["idPlanta"])){

			$tabla ="planta";
			$datos = $_GET["idPlanta"];

			$respuesta = ModeloPlanta::mdlBorrarPlanta($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						   swal({
							  title: "Planta borrado ",
							  text: "Registro eliminado correctamente",
							  icon: "success",
							  buttons: true,
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    window.location = "plantas";
							  } else {
							    window.location = "plantas";
							  }
							});

					</script>';
			}
		}
		
	}



  }	


?>