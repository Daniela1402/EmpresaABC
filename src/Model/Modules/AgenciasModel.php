<?php  
require_once("src/Model/Conexion.php");

class AgenciasModel {

	private $conn;
	private $conexion;

	private $list_agencias = array();
	
	public function __construct() {
		$this->conn = new Conexion();
		$this->conexion = $this->conn->getConexion();
	}

	public function createAgenciasDB(AgenciasClass $agenciasClass) {
		$sql = "INSERT INTO agencias (agencias_nit , agencias_razon_social , agencias_domicilio , agencias_telefonos) VALUES (?,?,?,?)";

		try{
			$ps = $this->conexion->prepare($sql);
			$ps->bindValue(1, $agenciasClass->getAgenciasNit(), PDO::PARAM_INT);
			$ps->bindValue(2, $agenciasClass->getAgenciasRazonSocial(), PDO::PARAM_STR);
			$ps->bindValue(3, $agenciasClass->getAgenciasDomicilio(), PDO::PARAM_STR);
			$ps->bindValue(4, $agenciasClass->getAgenciasTelefono(), PDO::PARAM_INT);
			
			return $ps->execute();

		}catch (PDOException $e) {
			echo("Error: " . $e);
			return false;
		}
	}
	public function readAgenciasDB() {
		$sql = "SELECT * FROM agencias";

		try {
			$ps = $this->conexion->prepare($sql);
			$ps->execute();
			foreach ($ps->fetchAll() as $key => $data) {
				array_push($this->list_agencias, new AgenciasClass($data['idAgencias'], $data['agencias_nit'], $data['agencias_razon_social'], $data['agencias_domicilio'], $data['agencias_telefonos'] ));
			}

			return $this->list_agencias;
		} catch (PDOException $e) {
			echo("Error: " . $e);
			return false;
		}
	}


}