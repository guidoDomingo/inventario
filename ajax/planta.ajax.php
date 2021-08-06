<?php

require_once "../controlador/planta.controlador.php";
require_once "../modelo/planta.modelo.php";

class AjaxPlanta{

	/*=============================================
	EDITAR Planta
	=============================================*/	

	public $idPlanta;

	public function ajaxEditarPlanta(){

		$item = "id";
		$valor = $this->idPlanta;

		$respuesta = ControladorPlanta::ctrMostrarPlanta($item, $valor);

		echo json_encode($respuesta);

	}

}

	/*=============================================
VALIDAR NO REPETIR USUARIO
=============================================*/

if(isset($_POST["idPlanta"])){

	$valPlanta = new AjaxPlanta();
	$valPlanta -> idPlanta = $_POST["idPlanta"];
	$valPlanta -> ajaxEditarPlanta();

}
