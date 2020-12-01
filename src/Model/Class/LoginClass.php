<?php 

  class LoginClass{

  	private $usuarios_email;
  	private $usuarios_password;

	public function __construct($usuarios_email, $usuarios_password)
	{
		$this->usuarios_email = $usuarios_email;
		$this->usuarios_password = $usuarios_password;
	}


    public function getUsuariosEmail()
    {
        return $this->usuarios_email;
    }

    public function getUsuariosPassword()
    {
        return $this->usuarios_password;
    }
}





