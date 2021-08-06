<?php

require_once "../controlador/proveedor.controlador.php";
require_once "../modelo/proveedor.modelo.php";

class AjaxProveedor{

	/*=============================================
	EDITAR Categoria
	=============================================*/	

	public $idProveedor;

	public function ajaxEditarProveedor(){

		$item = "id";
		$valor = $this->idProveedor;

		$respuesta = ControladorProveedor::ctrMostrarProveedor($item, $valor);

		echo json_encode($respuesta);

	}

}

	/*=============================================
VALIDAR NO REPETIR USUARIO
=============================================*/

if(isset($_POST["idProveedor"])){

	$valProveedor = new AjaxProveedor();
	$valProveedor -> idProveedor = $_POST["idProveedor"];
	$valProveedor -> ajaxEditarProveedor();

}
