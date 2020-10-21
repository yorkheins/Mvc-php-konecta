<?php 

/** 
 * 
 */
class mainModel 
{
	

	function read(){
			//url donde esta la api
			  $url = "http://127.0.0.1:8001/users/";
			  //se procede a hacer el consumo de la api con la funcion curl
		      $client = curl_init ( $url ) ;
			  curl_setopt ( $client , CURLOPT_RETURNTRANSFER , true ) ;
			  // la variable $response guarda el json que trae de la api
			  $response = curl_exec($client);
			  //la variable $resul convierte el json en un arreglo de php
			  $result = json_decode($response,true);
			 	//la variable $user entra en los arreglos que tienen los datos
			 	$user = $result["users"];
			 		//regresamos el arreglo de usuarios
			 		return $user;
		
}
function show($id){
	//url donde esta la api
			  $url = "http://127.0.0.1:8001/users/".$id;
			  //se procede a hacer el consumo de la api con la funcion curl
		      $client = curl_init ( $url ) ;
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
curl_setopt($ch, CURLOPT_URL,"http://localhost:8001/users/");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
 
// recibimos la respuesta y la guardamos en una variable
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);
 
// cerramos la sesión cURL
curl_close ($ch);

echo "termine";
die; 
	}

	function update($json,$id){
// //La URL a la que queremos enviar una solicitud PUT.
 $url = 'http://localhost:8001/users/'.$id;
 //echo $json;
 
$conexion = curl_init();

$envio = $json; // --- Puede ser un xml, un json, etc.



curl_setopt($conexion, CURLOPT_URL,$url);

// --- Datos que se van a enviar por PUT.

curl_setopt($conexion, CURLOPT_POSTFIELDS,$envio);

// --- Cabecera incluyendo la longitud de los datos de envio.

curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type: application/json', 'Content-Length: '.strlen($envio)));

// --- Petición PUT.

curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "PUT");

// --- HTTPGET a false porque no se trata de una petición GET.

curl_setopt($conexion, CURLOPT_HTTPGET, FALSE);



// --- Respuesta.

$respuesta=curl_exec($conexion);



if($respuesta===false){

 echo "error";

curl_close($conexion);

}

 echo "termine de actualizar";
 die; 
 
	}
}
 ?>