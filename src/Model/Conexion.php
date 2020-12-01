<?php

class Conexion {

	private $host = "localhost";
	private $db_name = "empresa_abc";
	private $user = "root";
	private $password = "";

	private $conn;
	
	public function __construct() {
		try {
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password);
		} catch (Exception $e) {
			echo("Error: " . $e);
		}
	}

	public function getConexion() {
		return $this->conn;
	}

}