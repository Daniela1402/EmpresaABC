<?php
require_once("src/Model/Modules/ClientesModel.php");
require_once("src/Model/Class/ClientesClass.php");

class ClientesController {

	private $clientesModel;
	private $clientesClass;
	
	public function __construct() {
		$this->clientesModel = new ClientesModel();
	}

	public function createClientes() {
		if (isset($_POST['clientes_cedula_c'])) {
			if (!empty($_POST['clientes_cedula_c'])) {
				$this->clientesClass = new ClientesClass(null, $_POST['clientes_cedula_c'], $_POST['clientes_nombres_c'], $_POST['clientes_apellidos_c'], $_POST['clientes_domicilio_c'], $_POST['clientes_telefono_c']);

				if ($this->clientesModel->createClientesDB($this->clientesClass)) {
					return true;
				} else {
					return false;
				}
			}
		}
	}

	public function readClientes() {
		return $this->clientesModel->readClientesDB();
	}

}