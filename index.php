<?php
include('conf.php');

if(isset($_GET['mod'])) $modulo = $_GET['mod'];
else $modulo = DEFAULT_MODULE;

if(!isset($conf[$modulo])) $modulo = DEFAULT_MODULE;

if(!isset($conf[$modulo]['layout'])) $conf[$modulo]['layout'] = DEFAULT_LAYOUT;

// Cargamos datos y conectamos a bases de datos etc

//include('clases/database.php');
//$database = new DataBase();

$module_path = MODULES_PATH."/".$conf[$modulo]['file'];
$layout_path = LAYOUTS_PATH."/".$conf[$modulo]['layout'];

if(file_exists($layout_path)) include($layout_path);
else 	if(file_exists($module_path)) include($module_path);
		else echo "Error al cargar el modulo '".$modulo."'";
