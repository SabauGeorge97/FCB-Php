<?php
class Dbh {
	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $charset;

	protected function connect()
	{
			$this->servername="localhost";
			$this->username="root";
			$this->password="";	
			$this->dbname="fcb";
			$this->charset="utf8mb4";


			try {
    			$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=$this->charset", $this->username, $this->password);
    				// set the PDO error mode to exception
   				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		return $conn;
    		} catch(PDOException $e) {
    			echo "Connection failed: " . $e->getMessage();
   			}
	}
}

