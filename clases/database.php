<?php
/**
* Clase de conexion con la base de datos
*/
class DataBase
{
	// Variables de configuracion de la clase
	private $HOST = 'localhost';
	private $DATABASE = 'databasename';
	private $USER = 'username';
	private $PASS = 'password';

	private $link;

	function __construct()
	{
		try{
			$this->link = new PDO('mysql:host='.$this->HOST.';dbname='.$this->DATABASE,$this->USER, $this->PASS);
			$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo 'Error conectando a la base de datos: '.$e->getMessage();
		}
	}
	function query($QUERY){
		$statement = $this->link->prepare($QUERY);
		try{
			$statement->execute();
		}catch(Exception $e){
			throw new Exception('Se ha producido un error ejecutando la consulta: ['.$QUERY.']:'.$e->getMessage());
		}
		return $statement;
	}
}
?>
