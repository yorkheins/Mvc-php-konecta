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
			//en estos dos metodos volvemos la url un array, donde, guarda en una psicion del arreglo todo lo que viene de entre /
			$url = rtrim($url , '/');
			$url = explode('/', $url);
			//confirmamos que la carga
			echo "<p>Esta es la app de la aplicación</p>";
			//Segun la logica la $url[1] carga el controlador que solicita el usuario por url
			$archivoControllers = 'controllers/'.$url[1].'.php';
			//validamos si existe el controlador, si existe lo carga, sino manda mensaje de error
			if (file_exists($archivoControllers)) {
				require_once $archivoControllers;
			    $controller = new $url[1];
			}else{
				echo "no existe el recurso";
			}
			
		}
	}
 ?>