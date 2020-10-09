<?php 

 /**
  * 
  */
 class views
 {
 	
 	function __construct()
 	{
 			
 	}
 	//funcion render recive un parametro para definir la vista a cargar
 	function render($nombre){
 	//carga la vista indicada
 		require 'views/'.$nombre.'.php';
 	}
 }

 ?>