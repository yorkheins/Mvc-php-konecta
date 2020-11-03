<?php 
//session_start();
/** 
 * 
 */
class main extends controllers
{

	
	function __construct()
	{
	//con la clase parent hereda las funcionalidades del controlador padre
		parent::__construct();
		
		//busca la vista bajo el metodo render y le indica que debe renderizar
		
	}
	function render(){
			session_start();
			if (isset($_SESSION['login'])) {
				$this->views->render('main/index');
			}else{
				$this->views->render('login/index');
			}

			//$this->views->render('main/index');
		
		 
	}
		function validarFunction($funcion){
		$funciones = array(
			"render" => "true",
			"solicitarToken" => "true"
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


	function solicitarToken(){
		$token = $this->model->token();
		echo "<script>
		alert('".$token."');
		window.location='http://crud.local.com:8002/main';
		</script>";
		//$this->view->render('main/index');
	}
	
}
 ?>