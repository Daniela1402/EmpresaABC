<?php

class ClientesClass {
	
	private $idClientes;
	private $clientes_cedula;
	private $clientes_nombres;
	private $clientes_apellidos;
	private $clientes_domicilio;
	private $clientes_telefono;

	public function __construct($idClientes, $clientes_cedula, $clientes_nombres, $clientes_apellidos, $clientes_domicilio, $clientes_telefono) {
		$this->idClientes = $idClientes;
		$this->clientes_cedula = $clientes_cedula;
		$this->clientes_nombres = $clientes_nombres;
		$this->clientes_apellidos = $clientes_apellidos;
		$this->clientes_domicilio = $clientes_domicilio;
		$this->clientes_telefono = $clientes_telefono;
	}

    public function getIdClientes() {
        return $this->idClientes;
    }

    public function getClientesCedula() {
        return $this->clientes_cedula;
    }

    public function getClientesNombres() {
        return $this->clientes_nombres;
    }

    public function getClientesApellidos() {
        return $this->clientes_apellidos;
    }

    public function getClientesDomicilio() {
        return $this->clientes_domicilio;
    }

    public function getClientesTelefono() {
        return $this->clientes_telefono;
    }

}