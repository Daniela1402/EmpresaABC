<?php  


class AgenciasClass{

	private $idAgencias;
	private $agencias_nit;
	private $agencias_razon_social;
	private $agencias_domicilio;
	private $agencias_telefono;


	public function __construct($idAgencias, $agencias_nit, $agencias_razon_social, $agencias_domicilio, $agencias_telefono)
	{
		$this->idAgencias = $idAgencias;
		$this->agencias_nit = $agencias_nit;
		$this->agencias_razon_social = $agencias_razon_social;
		$this->agencias_domicilio = $agencias_domicilio;
		$this->agencias_telefono = $agencias_telefono;
	}



    public function getIdAgencias()
    {
        return $this->idAgencias;
    }

    
    public function getAgenciasNit()
    {
        return $this->agencias_nit;
    }

    
    public function getAgenciasRazonSocial()
    {
        return $this->agencias_razon_social;
    }

    
    public function getAgenciasDomicilio()
    {
        return $this->agencias_domicilio;
    }

    
    public function getAgenciasTelefono()
    {
        return $this->agencias_telefono;
    }
}