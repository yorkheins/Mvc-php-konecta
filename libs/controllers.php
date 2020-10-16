<?php 
/**
 *  
 */
class controllers
{
	
	function __construct()
	{
	//funcion para que los controladores carguen una vista
	$this->views = new views();
	}

	function loadModel($model){
		$url = "models/".$model."model.php";
		if (file_exists($url)) {
			require $url;
			// require $url;

			$modelName = $model."Model";
			$this->model = new $modelName();

		}
	}
}
 ?>