<?php 

require_once("src/Model/Conexion.php");

class LoginModel{

	private $conn;
	private $conexion;

	private $list_login = array();
	
	public function __construct() {
		$this->conn = new Conexion();
		$this->conexion = $this->conn->getConexion();
	}

	public function validationLoginBD(LoginClass $loginClass) {
		$sql = "SELECT COUNT(*) AS files FROM usuarios WHERE usuarios_email=? AND usuarios_password=?";

		try {
			$ps = $this->conexion->prepare($sql);
			$ps->bindValue(1, $loginClass->getUsuariosEmail(), PDO::PARAM_STR);
			$ps->bindValue(2, $loginClass->getUsuariosPassword(), PDO::PARAM_STR);
			$ps->execute();
			return $ps->fetch();
		} catch (PDOException $e) {
			echo("Error: " . $e);
			return false;
		}
	}

	public function loginSessionDB(LoginClass $loginClass) {
		$sql = "SELECT idUsuarios FROM usuarios WHERE usuarios_email=? AND usuarios_password=?";
		try {
			$ps = $this->conexion->prepare($sql);
			$ps->bindValue(1, $loginClass->getUsuariosEmail(), PDO::PARAM_STR);
			$ps->bindValue(2, $loginClass->getUsuariosPassword(), PDO::PARAM_STR);
			$ps->execute();
			return $ps->fetch();
		} catch (PDOException $e) {
			echo("Error: " . $e);
			return false;
		}
	}

}