<?php 
/**
 * 
 */ 
class loginModel 
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
	function login ($user){
		$url = "http://localhost:8003/login";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			"X_USER:".$user
		]);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$ret = curl_exec($ch);
		$json = json_decode($ret,true);
		return $json;
		//var_dump($json);

	}
	function logout ($token){
		$url = "http://localhost:8003/logout";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			"X_USER:".$token
		]);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$ret = curl_exec($ch);
		//$json = json_decode($ret,true);
		return $ret;
		//var_dump($json);

	}
}
 ?>