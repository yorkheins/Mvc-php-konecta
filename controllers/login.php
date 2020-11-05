
<?php 
/** 
 * 
 */
class login extends controllers
{
	
	function __construct()
	{
	//con la clase parent hereda las funcionalidades del controlador padre
		parent::__construct();
		
		//busca la vista bajo el metodo render y le indica que debe renderizar
		
	}
	function render(){
		$this->views->render('login/index');	 
	}
	function validarFunction($funcion){
		$funciones = array(
			"render" => "true",
			"ingresar" => "true",
			"logout" => "true",
			"validarFunction" => "true"
		);
		 if (array_key_exists($funcion,$funciones))
  {
  return true;
  }
else
  {
  return false;
  }
	}
	function ingresar(){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$login = $this->model->login($user);
		if ($login == null) {
			$campo_user_vacio = '
			 <input type="text" class="form-control is-invalid" name="user" placeholder="Ingrese su usuario" required>
			 <div class="invalid-feedback">
        		El usuario ingresado no está registrado
      		</div>
			';
			$campo_password_vacio = '
			 <input type="password" class="form-control is-invalid" name="pass" placeholder="Password" required>
			 <div class="invalid-feedback">
        		El password ingresado no está registrado
      		</div>
			';
$no_valido = array('campo_user' => $campo_user_vacio,'campo_pass' => $campo_password_vacio);
			$this->views->user_no_valido = $no_valido;
		}else{
			if ($login['password'] == $pass) {
				$token = $this->model->token();

				session_start();
				$_SESSION['datos'] = $login['full_name'];
				$_SESSION['login'] = "true";
				$_SESSION['token'] = $token;
				$this->views->render('main/index');

				die;
			}else{
				$user_valido = array('user' => $user );
				$campo_password_vacio = '
			 <input type="password" class="form-control is-invalid" name="pass" placeholder="Password" required>
			 <div class="invalid-feedback">
        		El password es incorrecto
      		</div>
			';
$no_valido = array('campo_pass' => $campo_password_vacio);
			$this->views->user_no_valido = $no_valido;
				 $this->views->user_valido = $user_valido;
				 //$this->views->user_valido = $user_valido;
			}
		}
		
		$this->views->render('login/index');
		
	}
	function logout(){
		session_start();
		$ok = $this->model->logout($_SESSION['token']);
		if ($ok == "OK") {
			session_destroy();
		$this->views->render('login/index');
		}
	}

}
 ?>
