<?php

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$servername = "127.0.0.1:3306";
		$username = "root";
		$password = "zilda19121956";		

		try {
		    $this->conn = new PDO("mysql:host=$servername;dbname=dbphp7", $username, $password);
		    // set the PDO error mode to exception
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully";
		    echo "<br/>";
		    echo "<br/>";
		}
		catch(PDOException $e){
		    echo "Connection failed: " . $e->getMessage();
		    }

		}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value);

		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);	

		$stmt->execute();

		return $stmt;	

	}

	public function select($rawQuery, $params = array()):array{


		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);


	}

}

?>