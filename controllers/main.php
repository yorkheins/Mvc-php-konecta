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
		 $this->views->render('main/create');
	}

	function insert(){
		$this->model->insert();
	}
}
 ?>