<?php
require_once("src/Model/Conexion.php");

class ClientesModel {

	private $conn;
	private $conexion;

	private $list_clientes = array();
	
	public function __construct() {
		$this->conn = new Conexion();
		$this->conexion = $this->conn->getConexion();
	}

	public function createClientesDB(ClientesClass $clientesClass) {
		$sql = "INSERT INTO clientes (clientes_cedula, clientes_nombres, clientes_apellidos, clientes_domicilio, clientes_telefono) VALUES (?,?,?,?,?)";

		try {
			$ps = $this->conexion->prepare($sql);
			$ps->bindValue(1, $clientesClass->getClientesCedula(), PDO::PARAM_INT);
			$ps->bindValue(2, $clientesClass->getClientesNombres(), PDO::PARAM_STR);
			$ps->bindValue(3, $clientesClass->getClientesApellidos(), PDO::PARAM_STR);
			$ps->bindValue(4, $clientesClass->getClientesDomicilio(), PDO::PARAM_STR);
			$ps->bindValue(5, $clientesClass->getClientesTelefono(), PDO::PARAM_INT);
			return $ps->execute();
		} catch (PDOException $e) {
			echo("Error: " . $e);
			return false;
		}
	}

	public function readClientesDB() {
		$sql = "SELECT * FROM clientes";

		try {
			$ps = $this->conexion->prepare($sql);
			$ps->execute();
			foreach ($ps->fetchAll() as $key => $data) {
				array_push($this->list_clientes, new ClientesClass($data['idClientes'], $data['clientes_cedula'], $data['clientes_nombres'], $data['clientes_apellidos'], $data['clientes_domicilio'], $data['clientes_telefono']));
			}

			return $this->list_clientes;
		} catch (PDOException $e) {
			echo("Error: " . $e);
			return false;
		}
	}
	
}