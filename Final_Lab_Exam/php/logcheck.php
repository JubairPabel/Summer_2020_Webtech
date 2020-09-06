<?php
	require_once('../db/db.php');
	require_once('userService.php');
	$conn = dbConnection();
	if(!$conn){
		echo "DB connection error";
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$data = 'not';
	$sql= "SELECT * FROM users WHERE email = '" . $email . "' AND pass = '". $pass ."'";
	if (($result = $conn->query($sql)) !== FALSE){
        while($row = $result->fetch_assoc()){
			$data = 'ok';
			$_SESSION['username'] = $username;
		}
	}
	echo $data;
?>