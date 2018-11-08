<?php

namespace Geova\DB;


class Sql{

	private $conn;
	private $DB_host = "localhost";
	private $DB_name = "geova";
	private $DB_user = "root";
	private $DB_password = "";


	public function __construct(){
		try{

			$this->conn = new \PDO("mysql:host={$this->DB_host};dbname={$this->DB_name};",
				$this->DB_user,
				$this->DB_password);

		}catch(Exception $e){
			return $e->getMessage();
		}
	}
	
	private function setParams($statement, $params){

		foreach ($params as $key => $value) {
			
			$this->bindParam($statement, $key, $value);
		}
	}

	private function bindParam($statement, $key, $value){

		$statement->bindParam($key,$value);
	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		if(!$stmt->execute()){
			print_r($stmt->errorInfo());
		}
	}

	public function select($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}	
}