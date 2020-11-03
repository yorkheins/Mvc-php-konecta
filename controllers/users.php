<?php 
/** 
 * 
 */
class users extends controllers
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
				$id = "";
		$this->views->wos = [];
		 $wos = $this->model->read($id);
		 $this->views->wos = $wos;
		$this->views->render('users/view');	
			}else{
				$this->views->render('login/index');
			}
		 
	}
	function validarFunction($funcion){
		$funciones = array(
			"render" => "true",
			"read_modal" => "true",
			"validarFunction" => "true",
			"read" => "true",
			"show" => "true",
			"create" => "true",
			"new" => "true",
			"update" => "true",
			"edit" => "true",
			"delete" => "true"
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

	function read_modal(){

		 //$id = $_POS['id'];
		 $this->views->wos = [];
		 $wos = $this->model->read();		
		 $this->views->wos = $wos;
	     $this->views->render('users/view');
	 }

	function show($id){
		session_start();
			if (isset($_SESSION['login'])) {
				$id;
		 $this->views->show_user = [];
		 $show_user=$this->model->show($id);
		 $this->views->show_user = $show_user;
		 $this->views->render('users/show');
			}else{
				$this->views->render('login/index');
			}
	}
	function create(){
		session_start();
			if (isset($_SESSION['login'])) {
				$this->views->render('users/create');
			}else{
				$this->views->render('login/index');
			}
		 
	}
	function new(){
		session_start();
			if (isset($_SESSION['login'])) {
				 $id = $_POST['id'];
		 $nombre = $_POST['nombre'];
		 $apellido = $_POST['apellido'];
		 $correo = $_POST['correo'];
		 $telefono = $_POST['telefono'];
 
		 if (($id == "")||($nombre == "")||($apellido == "")||($correo == "")||($telefono == "")) {
		 	if (empty($id)) {
		 		$id = "";
		 	}
		 	if (empty($nombre)) {
		 		$nombre = "";
		 	}
		 	if (empty($apellido)) {
		 		$apellido = "";
		 	}
		 	if (empty($correo)) {
		 		$correo = "";
		 	}
		 	if (empty($telefono)) {
		 		$telefono = "";
		 	}
			 $return = array('id' => $id,'nombre' => $nombre,'apellido' => $apellido,'correo' => $correo, 'telefono' => $telefono);
			 $mensaje = "true";
			 $this->views->mensaje = $mensaje;
			 $this->views->show_user = $return;
			 $this->views->render('users/create');
			 die;
		}	
		 $confirmacion=$this->model->validarInsert($id);
		 if ($confirmacion == true) {
          $json = '{"id":"'.$id.'","nombre":"'.$nombre.'","apellido":"'.$apellido.'","correo":"'.$correo.'","telefono":"'.$telefono.'"}';
		  $response = $this->model->new($json);
		  if ($response) {
		  	$mensaje = "registrado";
		 	$this->views->mensaje = $mensaje;
		 	$this->views->render('users/create');
		  }
		  

		 }else{
		 	$json = '{"id":"'.$id.'","nombre":"'.$nombre.'","apellido":"'.$apellido.'","correo":"'.$correo.'","telefono":"'.$telefono.'"}';
		 	$mensaje = "existe";
		 	$this->views->mensaje = $mensaje;
		 	$this->views->render('users/create');
			 die;
		 }
			}else{
				$this->views->render('login/index');
			}
		

	} 
function update ($id){
	session_start();
			if (isset($_SESSION['login'])) {
				$id;
		 $this->views->show_user = [];
		 $show_user=$this->model->show($id);
		 $this->views->show_user = $show_user;
		 $this->views->render('users/update');
			}else{
				$this->views->render('login/index');
			}
		  
	}
	function edit ($id){
		session_start();
			if (isset($_SESSION['login'])) {
				$nombre = $_POST['nombre'];
		 $apellido = $_POST['apellido'];
		 $correo = $_POST['correo'];
		 $telefono = $_POST['telefono'];
 
		 if (($nombre == "")||($apellido == "")||($correo == "")||($telefono == "")) {
		 	if (empty($nombre)) {
		 		$nombre = "";
		 	}
		 	if (empty($apellido)) {
		 		$apellido = "";
		 	}
		 	if (empty($correo)) {
		 		$correo = "";
		 	}
		 	if (empty($telefono)) {
		 		$telefono = "";
		 	}
			 $return = array('id' => $id,'nombre' => $nombre,'apellido' => $apellido,'correo' => $correo, 'telefono' => $telefono);
			 $mensaje = "true";
			 $this->views->mensaje = $mensaje;
			 $this->views->show_user = $return;
			 $this->views->render('users/update');
		}	
		 

		 $json = '{"nombre":"'.$nombre.'","apellido":"'.$apellido.'","correo":"'.$correo.'","telefono":"'.$telefono.'"}';
		$respuesta =  $this->model->update($json,$id);
		 if ($respuesta) {
					 $mensaje = "actualizado";
			 $this->views->mensaje = $mensaje;
		$this->views->wos = [];
		 $wos = $this->model->read();
		 $this->views->wos = $wos;
		$this->views->render('users/view');
			}else{
				$this->views->render('login/index');
				
				}
			}
		
	}
	function delete ($id){
		session_start();
			if (isset($_SESSION['login'])) {
				 $this->model->delete($id);
				 $mensaje = "eliminado";
			 $this->views->mensaje = $mensaje;
			 $id = "";
		$this->views->wos = [];
		 $wos = $this->model->read($id);
		 $this->views->wos = $wos;
		$this->views->render('users/view');
			}else{
				$this->views->render('login/index');
			}
		
		 //$this->views->show_user = $show_user;
		 //$this->views->render('main/update');
	}

}
 ?>