<?php 

/** 
 * 
 */
class mainModel 
{
	
	function insert(){
		$api = "http://127.0.0.1:8001/users";
		$json = file_get_contents($api); 
	}

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
			 	//esta es una prueba para publicar los datos
			 	// for ($i=0; $i < $total; $i++) { 
			 	// 	$nombre = $user[$i]["nombre"];
			 	// 	$apellido = $user[$i]["apellido"];
			 	// 	$id = $user[$i]["id"];
			 	// 	$correo = $user[$i]["correo"];
			 	// 	$telefono = $user[$i]["telefono"];
			 	// 	$fecha_creacion = $user[$i]["fecha_creacion"];
			 	// 	echo "<tr>";
			 	//  		echo "<td>{$id}</td>";
			 	// 		echo "<td>{$nombre}</td>";
			 	// 		echo "<td>{$apellido}</td>";
			 	//  	echo "</tr>";
			 	// }
			 	//fin de la prueba

			 		return $user;
			 	 ?>
			 </table>
			 <?php
		
}
	

}
 ?>