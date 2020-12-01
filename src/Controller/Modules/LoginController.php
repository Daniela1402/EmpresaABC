<?php 
require_once("src/Model/Modules/LoginModel.php");
require_once("src/Model/Class/LoginClass.php");

class LoginController{

	private $loginModel;
	private $loginClass;

	public function __construct(){
		$this->loginModel = new LoginModel();
	}

	public function validationLogin(){
		if(isset($_POST['usuarios_email_l'])) {
			if(!empty($_POST['usuarios_email_l'])) {

				$this->loginClass = new LoginClass($_POST['usuarios_email_l'], $_POST['usuarios_password_l']);
				$files = $this->loginModel->validationLoginBD($this->loginClass);

				if ($files['files'] > 0) {
					return $this->loginSession($this->loginClass);
				} else {
					echo("Error de Ingreso, El Email y/o Password son Incorrectos.");
				}
			}
		}
	}

	public function loginSession(LoginClass $loginClass) {
		$request = $this->loginModel->loginSessionDB($loginClass);

		if ($request != false) {
			$_SESSION['user_session'] = true;
			$_SESSION['idUsuarios'] = $request['idUsuarios'];
			echo '<script type="text/javascript">window.location.href="Dashboard";</script>';
		} else {
			echo("Error, consulte un administrador para que le solicite asesoria.");
		}
	}

}