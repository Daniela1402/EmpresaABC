<?php  
require_once("src/Model/Modules/AgenciasModel.php");
require_once("src/Model/Class/AgenciasClass.php");

class AgenciasController {

	private $agenciasModel;
	private $agenciasClass;

	public function __construct() {
		$this->agenciasModel = new AgenciasModel();
	}

	public function createAgencias() {
		if(isset($_POST['agencias_nit_c'])) {
			if(!empty($_POST['agencias_nit_c'])) {

				$this->agenciasClass = new AgenciasClass(null, $_POST['agencias_nit_c'], $_POST['agencias_razon_social_c'], $_POST['agencias_domicilio_c'], $_POST['agecias_telefono_c']);

				if ($this->agenciasModel->createAgenciasDB($this->agenciasClass)) {
					return true;
					
				} else {
					return false;
					
				}
			}
		}
	}
	public function readAgencias() {
		return $this->agenciasModel->readAgenciasDB();
	} 
} 