<?php
	

	if(isset($_POST['submit'])){
        $name = $_POST['name'];
		$uname = $_POST['userName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $c_password = $_POST['confirmPassword'];
        
        echo "recorded";

		$enc = md5($password);

		if(empty($uname) || empty($password) || empty($email) || empty($uname) || empty($c_password) )
		{
			echo "null submission";
		}
		else
			if($password == $c_password)
		{
		setcookie('name', $name, time()+3600, '/');
		setcookie('uname', $uname, time()+3600, '/');
		setcookie('email', $email, time()+3600, '/');
		setcookie('password', $enc, time()+3600, '/');
		header('location: login.php');
		}
		else {
			echo "Password not matched";
		}
		

	}
?>