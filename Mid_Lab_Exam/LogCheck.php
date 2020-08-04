<?php
	session_start();

	if(isset($_POST['submit'])){

		$uid	= $_POST['userid'];
		$password 	= $_POST['password'];
        
        $type = "Admin";
		if(empty($uname) || empty($password)){
			echo "null submission";

		}else{
			
			$file = fopen('user.txt', 'r');
			$data = fread($file, filesize('user.txt'));
			$user = explode('|', $data);


			/*while(!feof($data)){
				$user = fgets($data);
				$user = explode('|', $data);
			}*/

			//print_r($user);

			if(trim($user[0]) == $uid && trim($user[1]) == $password)

			{ 
				if(trim($user[4]) == $type)
				{
					$_SESSION['status']  = "Ok";
				header('location: ahome.php');
				}
				else 
				{
					$_SESSION['status']  = "Ok";
				header('location: uhome.php');
				}
				
			}
			else
			{
				echo "Invalid username/password";
			}
		}

	}else{
		header("location: login.html");
	}


?>