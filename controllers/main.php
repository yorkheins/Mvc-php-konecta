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
		$this->views->render('main/index');	
	}
}
 ?>