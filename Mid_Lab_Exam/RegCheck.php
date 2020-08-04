<?php
	

	if(isset($_POST['submit'])){

		$id = $_POST['ID'];
		$password = $_POST['Password'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$type = $_POST['Type'];



		if(empty($id) || empty($password) || empty($name) || empty($email) || empty($type)){
			echo "null submission";
		}else {

		
	


			$file = fopen('user.txt', 'a');
			fwrite($file, $id.'|'.$password.'|'.$name. '|' .$email. '|' .$type."/r/n");
			fclose($file);



			header('location: Login.html');
		}

	}else{
		header("location: Login.html");
	}


?>