<?php
	session_start();

	if(isset($_POST['submit'])){
        $name = $_POST['name'];
		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $email = $_POST['email'];
        $c_password = $_POST['confirmPassword'];


		$enc = md5($password);

		if(empty($uname) || empty($password) || empty($email)){
			echo "null submission";
		}else
		if($password == $c_password)
        {
        	

            setcookie('name', $name, time()+3600, '/');
			setcookie('uname', $uname, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('password', $enc, time()+3600, '/');
          

		}
		else{
			echo "Password not matched!!";
		}

	}


?>