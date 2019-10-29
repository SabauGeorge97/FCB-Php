<?php 

class User extends Dbh {

	public function all_users() {

		$insert = "INSERT INTO contactinfo (name, email, message)
				   VALUES ('$name', '$email', '$message')";
				   
	  	$result = $conn->query($insert); 
       
	  	return $result;
	}
}