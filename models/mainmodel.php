<?php 
/**
 * 
 */ 
class mainModel 
{
	
	function token()
	{
		  $url = "http://localhost:8003/solicitar";
			  //se procede a hacer el consumo de la api con la funcion curl
		      $client = curl_init ( $url ) ;
			  curl_setopt ( $client , CURLOPT_RETURNTRANSFER , true ) ;
			  // la variable $response guarda el json que trae de la api
			  $response = curl_exec($client);
			  
			 		
			 		return $response;
			 	
	}
}
 ?>