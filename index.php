<?php
require_once 'autoload.php';

require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


if (isset($_GET['controller'])) {
	// code...
	$nombre_controlador = $_GET['controller'].'controller';
}else{
	echo "La página que buscas no existe1";
	exit();
}

if (class_exists($nombre_controlador)) {
	// code...
	$controlador = new $nombre_controlador();

	if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
		// code...
		$action = $_GET['action'];
		$controlador->$action();
	}else{
		echo "La página que buscas no existe2";

	}
}else{
	echo "La página que buscas no existe3";
}

require_once 'views/layout/footer.php';