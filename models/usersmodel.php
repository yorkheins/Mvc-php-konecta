<?php 
session_start();
/** 
 * 
 */ 
class usersModel 
{ 

	function read(){
			$url = "http://api.local.com:8001/customers";
			$ch = curl_init($url);
//curl_setopt($ch, CURLOPT_HTTPHEADER, ["X_TOKEN:".$_SESSION['token']]);
 curl_setopt($ch, CURLOPT_HTTPHEADER,array('TOKEN: '.$_SESSION['token']));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$ret = curl_exec($ch);
			$json = json_decode($ret,true);
			return $json;
		 $ret;
}



function show($id){
	//session_start();
	//url donde esta la api
			  $url = "http://api.local.com:8001/customers/".$id;
			  //se procede a hacer el consumo de la api con la funcion curl
		      $client = curl_init ( $url ) ;
curl_setopt($client, CURLOPT_HTTPHEADER, ["TOKEN:".$_SESSION['token']]);
			  curl_setopt ( $client , CURLOPT_RETURNTRANSFER , true ) ;
			  // la variable $response guarda el json que trae de la api
			  $response = curl_exec($client);
			  //la variable $resul convierte el json en un arreglo de php
			  $result = json_decode($response,true);
			 	//la variable $user entra en los arreglos que tienen los datos
			 	//$user = $result["users"];
			 		//regresamos el arreglo de usuarios
			 		return $result;
}

	function new($json){		
 		$ch = curl_init();
 
 // definimos la URL a la que hacemos la petición
 curl_setopt($ch, CURLOPT_URL,"http://127.0.0.1:8001/customers/");
 //token
 curl_setopt($ch, CURLOPT_HTTPHEADER, [
			"TOKEN:".$_SESSION['token']
		]);
 // indicamos el tipo de petición: POST
 curl_setopt($ch, CURLOPT_POST, TRUE);
 // definimos cada uno de los parámetros
 curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
 
 // recibimos la respuesta y la guardamos en una variable
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $remote_server_output = curl_exec ($ch);
 
 // cerramos la sesión cURL
 curl_close ($ch);

 return true;  
	}  

	function update($json,$id){

// //La URL a la que queremos enviar una solicitud PUT.
 $url = "http://api.local.com:8001/customers/".$id;
 $ch = curl_init();
 $envio = $json; // --- Puede ser un xml, un json, etc.
 curl_setopt($ch, CURLOPT_URL,$url);


// // --- Datos que se van a enviar por PUT.

 curl_setopt($ch, CURLOPT_POSTFIELDS,$envio);

// // --- Cabecera incluyendo la longitud de los datos de envio.

 curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json', 'Content-Length: '.strlen($envio), 'TOKEN:'.$_SESSION['token']));

// // --- Petición PUT.

 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

// // --- HTTPGET a false porque no se trata de una petición GET.

curl_setopt($ch, CURLOPT_HTTPGET, FALSE);



// // --- Respuesta.

 $respuesta=curl_exec($ch);





return true;
 
	}

	function delete($id){
$url = 'http://127.0.0.1:8001/customers/'.$id;

$conexion = curl_init();


curl_setopt($conexion, CURLOPT_HTTPHEADER, [
			"TOKEN:".$_SESSION['token']
		]);
curl_setopt($conexion, CURLOPT_URL,$url);

// --- Cabecera

curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type: application/json','TOKEN:'.$_SESSION['token']));

// --- Petición DELETE.

curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "DELETE");

// --- HTTPGET a false porque no se trata de una petición GET.

curl_setopt($conexion, CURLOPT_HTTPGET, FALSE);



// --- Respuesta.

$respuesta=curl_exec($conexion);
curl_close($conexion);
return true;


	}


	function validarInsert($id){
		$url = "http://127.0.0.1:8001/customers/".$id;
			  //se procede a hacer el consumo de la api con la funcion curl
		      $client = curl_init ( $url ) ;
			  curl_setopt ( $client , CURLOPT_RETURNTRANSFER , true ) ;
			  curl_setopt($client, CURLOPT_HTTPHEADER, [
			"TOKEN:".$_SESSION['token']
		]);
			  // la variable $response guarda el json que trae de la api
			  $response = curl_exec($client);
			  //la variable $resul convierte el json en un arreglo de php
			  $result = json_decode($response,true);
			 	//la variable $user entra en los arreglos que tienen los datos
			 	//$user = $result["users"];
			 		//regresamos el arreglo de usuarios
			 		if ($result['id'] == $id) {
			 		 	return false;
			 		 }else{
			 		 	return true;
			 		 }
	}
}
 ?>