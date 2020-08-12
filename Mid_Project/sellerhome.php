<?php 

session_start();

if( isset($_SESSION['email']) && isset($_SESSION['pass']))
{
	
    header('location: sellerhome.html');
 
}
else
{
	 header('location: login.html');
}

?>