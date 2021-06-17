<?php

require_once "../controlador/categoria.controlador.php";
require_once "../modelo/categoria.modelo.php";

class AjaxCategoria{

	/*=============================================
	EDITAR Categoria
	=============================================*/	

	public $idCategoria;

	public function ajaxEditarCategoria(){

		$item = "id";
		$valor = $this->idCategoria;

		$respuesta = ControladorCategoria::ctrMostrarCategoria($item, $valor);

		echo json_encode($respuesta);

	}

}

	/*=============================================
VALIDAR NO REPETIR USUARIO
=============================================*/

if(isset($_POST["idCategoria"])){

	$valCategoria = new AjaxCategoria();
	$valCategoria -> idCategoria = $_POST["idCategoria"];
	$valCategoria -> ajaxEditarCategoria();

}
