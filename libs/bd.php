<?php 
define('HOST','localhost');
define('DB','productos');
define('USER','root');
define('PASSWORD','');
define('CHARSET','utf8');
class BaseDatos 
{
	private $host; 
	private $db;
	private $user;
	private $password;
	private $chartset;
	 

	public function __construct(){
		$this->host = constant('HOST');
		$this->db = constant('DB');
		$this->user = constant('USER');
		$this->password = constant('PASSWORD');
		$this->charset = constant('CHARSET');
		
	} 
	function conexion(){
		try {$conexion="mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
			$options = [
				PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES  => false,
			];
			$pdo = new PDO($conexion,$this->user,$this->password,$options);
			return $pdo;
		} catch (PDOException $e) {
			print_r('Error conexion: '.$e->getMessage());
		}
	}
	
}