<?php 
/**
 * 
 */
class errores extends controllers{
	
	function __construct()
	{
	//con la clase parent hereda las funcionalidades del controlador padre
		parent:: __construct();	
		//muestra el mensaje de error (aqui va la vista de errores)
		echo "<p>no existe el recurso</p>";
	}
}
 ?>