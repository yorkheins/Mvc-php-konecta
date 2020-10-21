<?php 
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
		$this->views->render('main/index');	 
	}

	function read(){
		 $this->views->wos = [];
		 $wos = $this->model->read();
		 $this->views->wos = $wos;
		 $this->views->render('main/view');
	}

	function show($id){
		 $id;
		 $this->views->show_user = [];
		 $show_user=$this->model->show($id);
		 $this->views->show_user = $show_user;
		 $this->views->render('main/show');
	}
	function create(){
		 $this->views->render('main/create');
	}
	function new(){
		 $id = $_POST['id'];
		 $nombre = $_POST['nombre'];
		 $apellido = $_POST['apellido'];
		 $correo = $_POST['correo'];
		 $telefono = $_POST['telefono'];

		 $json = '{"id":"'.$id.'","nombre":"'.$nombre.'","apellido":"'.$apellido.'","correo":"'.$correo.'","telefono":"'.$telefono.'"}';
		 $this->model->new($json);

	} 
function update ($id){
		  $id;
		 $this->views->show_user = [];
		 $show_user=$this->model->show($id);
		 $this->views->show_user = $show_user;
		 $this->views->render('main/update');
	}
	function edit ($id){
		 $nombre = $_POST['nombre'];
		 $apellido = $_POST['apellido'];
		 $correo = $_POST['correo'];
		 $telefono = $_POST['telefono'];

		 $json = '{"nombre":"'.$nombre.'","apellido":"'.$apellido.'","correo":"'.$correo.'","telefono":"'.$telefono.'"}';
		 $this->model->update($json,$id);
	}

}
 ?>