<?php

require_once 'controlador/plantilla.controlador.php';
require_once 'controlador/categoria.controlador.php';
require_once 'controlador/equipo.controlador.php';
require_once 'controlador/estacion.controlador.php';
require_once 'controlador/planta.controlador.php';
require_once 'controlador/proveedor.controlador.php';
require_once 'controlador/sector_detalle.controlador.php';
require_once 'controlador/sector.controlador.php';
require_once 'controlador/usuarios.controlador.php';

require_once 'modelo/categoria.modelo.php';
require_once 'modelo/equipo.modelo.php';
require_once 'modelo/estacion.modelo.php';
require_once 'modelo/planta.modelo.php';
require_once 'modelo/proveedor.modelo.php';
require_once 'modelo/sector_detalle.modelo.php';
require_once 'modelo/sector.modelo.php';
require_once 'modelo/usuarios.modelo.php';


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();