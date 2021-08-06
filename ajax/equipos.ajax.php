<?php

require_once "../controlador/equipo.controlador.php";
require_once "../modelo/equipo.modelo.php";

class AjaxEquipo{

	/*=============================================
	EDITAR Categoria
	=============================================*/	

	public $idEquipo;

	public function ajaxEditarEquipo(){

		$item = "id";
		$valor = $this->idEquipo;

		$respuesta = ControladorEquipo::ctrMostrarEquipo($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
  GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
  =============================================*/

  public $idCategoria;

  public function ajaxCrearCodigoEquipo(){

  	$item = "id_categoria";
  	$valor = $this->idCategoria;

  	$respuesta = ControladorEquipo::ctrMostrarEquipo($item, $valor);

  	echo json_encode($respuesta);

  }

  /*=============================================
	ACTIVAR EQUIPO
	=============================================*/	

	public $activarEquipo;
	public $activarId;


	public function ajaxActivarEquipo(){

		$tabla = "equipo";

		$item1 = "estado";
		$valor1 = $this->activarEquipo;

		$item2 = "id";
		$valor2 = $this->activarId;

		$respuesta = ModeloEquipo::mdlActualizarEquipo($tabla, $item1, $valor1, $item2, $valor2);

	}

}

	/*=============================================
Ejecutamos el objeto 
=============================================*/

if(isset($_POST["idEquipo"])){

	$valEquipo = new AjaxEquipo();
	$valEquipo -> idEquipo = $_POST["idEquipo"];
	$valEquipo -> ajaxEditarEquipo();

}

/*=============================================
GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
=============================================*/	

if(isset($_POST["idCategoria"])){

	$codigoEquipo = new AjaxEquipo();
	$codigoEquipo -> idCategoria = $_POST["idCategoria"];
	$codigoEquipo -> ajaxCrearCodigoEquipo();

}

/*=============================================
Activar equipo
=============================================*/	

if(isset($_POST["activarEquipo"])){

	$activarEquipo = new AjaxEquipo();
	$activarEquipo -> activarEquipo = $_POST["activarEquipo"];
	$activarEquipo -> activarId = $_POST["activarId"];
	$activarEquipo -> ajaxActivarEquipo();

}
