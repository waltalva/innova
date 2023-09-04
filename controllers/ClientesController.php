<?php

class clientesController{
	public function index(){
		require_once 'views/Producto/destacados.php';
		echo "Controlador Clientes, Acción index";
	}

	public function registro(){
		require_once 'views/cliente/registro.php';
	}

	public function save(){
		if (isset($_POST)) {
			// code...
			var_dump($_POST);
		}
	}
}