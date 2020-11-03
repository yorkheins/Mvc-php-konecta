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
			//validamos si la url está vacia carga por defecto el main
			if (empty($url[1])) {
				$archivoControllers = 'controllers/main.php';
				require_once $archivoControllers;
				$controller = new main;
				$controller->loadModel('main');
				$controller->render();
				return false;	
			} 
			// # número de parametros en la url
			$numerop = sizeof($url); 
			
			
			//Segun la logica la $url[1] carga el controlador que solicita el usuario por url
			$archivoControllers = 'controllers/'.$url[1].'.php';
//validamos si existe el controlador, si existe lo carga, sino carga el controlador de error
			if (file_exists($archivoControllers)) {
				//hace el llamado al archivo del controlador
				require_once $archivoControllers;
//si el parametro por url tiene 3 valores sifnifica que viene con parametros a inyectar a un metodo
				if ($numerop > 3) {
						$controller = new $url[1];
						$controller->loadModel($url[1]);
					    $controller->{$url[2]}($url[3]);
				}else{
					//sino solo cargara el controlador y el metodo
								if (isset($url[2])) {
									//con estos dos comandos vamos al metodo que valida si la funcion solicitada existe
									$controller = new $url[1];
									$validar = $controller->validarFunction($url[2]);
									//si existe la carga sino manda un error 404
									if($validar){
										 $controller = new $url[1];
									     $controller->loadModel($url[1]);
					     			     $controller->{$url[2]}($url[3]);
									}else{
										require_once 'controllers/errores.php';
	
									$controller = new errores();
									$controller->render();

									}
									
										
							    }else{
							    //llega aqui si solo se solicita cargar un controlador 	
								$controller = new $url[1];
							    $controller->loadModel($url[1]);
							    $controller->render();
							    }
						}

			    
			}else{
				//carga el controlador del error 404
				require_once 'controllers/errores.php';
	
				$controller = new errores();
				$controller->render();

			}
			
		}
	}
 ?>