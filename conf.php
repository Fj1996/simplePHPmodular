<?php
/**
 * Archivo de configuracion del sitio
 */
define('DEFAULT_MODULE','home');
define('DEFAULT_LAYOUT','default_layout.php');
define('MODULES_PATH','modules/');
define('LAYOUTS_PATH','layouts/');

// Definimos el modulo home
$conf['home'] = array(
			'file' => 'home.php',
			'layout' => DEFAULT_LAYOUT);
// Define el modulo articulo
$conf['articulo'] = array(
			'file' => 'art.php');