<?php 
/**
 * 
 */
require_once 'libs/bd.php';
class models
{
	
	function __construct()
	{
		$this->db = new BaseDatos();
	}
}