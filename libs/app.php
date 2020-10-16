<?php
	/**
	 * clase que parece cumple con la funcion de ruta
	 */
	class App 
	{
		
		function __construct()
		{
			//guardamos en url todo lo que el usuario ingrese en la url
			$url = $_SERVER["REQUEST_URI"];
   //en estos dos metodos volvemos la url un array,
  // donde, guarda en una psicion del arreglo todo lo que viene de entre /
			$url = rtrim($url , '/');
			$url = explode('/', $url);

			if (empty($url[1])) {
				$archivoControllers = 'controllers/main.php';
				require_once $archivoControllers;
				$controller = new main;
				$controller->loadModel('main');
				$controller->render();
				return false;	
			}

			//Segun la logica la $url[1] carga el controlador que solicita el usuario por url
			$archivoControllers = 'controllers/'.$url[1].'.php';
//validamos si existe el controlador, si existe lo carga, sino carga el controlador de error
			if (file_exists($archivoControllers)) {
				require_once $archivoControllers;
			    $controller = new $url[1];
			    $controller->loadModel($url[1]);
			    $controller->render();
			    if (isset($url[2])) {
			    	$controller->{$url[2]}();
			    }
			}else{
				require_once 'controllers/errores.php';
	
				$controller = new errores();

			}
			
		}
	}
 ?>