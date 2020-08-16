<?php 

session_start();

if(isset($_COOKIE['email']))
{
	 header('location: sellerhome.html');
}
else
if( isset($_SESSION['email']) && isset($_SESSION['pass']))
{
	
    header('location: ../views/sellerhome.html');
 
}
else
{
	 header('location: ../views/login.html');
}

?>