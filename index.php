<?php
require_once 'controlador/plantilla.controlador.php';
require_once 'controlador/puntero.controlador.php';
require_once 'controlador/lider.controlador.php';

require_once 'modelo/puntero.modelo.php';
require_once 'modelo/lider.modelo.php';

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();