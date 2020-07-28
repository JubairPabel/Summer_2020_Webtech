<?php
	if(isset($_POST['submit']))
	{
		$cupassword 	= $_POST['cPassword'];
		$newpassword    = $_POST['nPassword'];
		$repassword     = $_POST['rePassword'];


		if($cupassword == $_COOKIE['password'])
		{
			$enc = md5($repassword);
			setcookie('password', $enc, time()+3600, '/');
			echo "Password Changed";
			header('location: login.php');
		}

	}
	?>