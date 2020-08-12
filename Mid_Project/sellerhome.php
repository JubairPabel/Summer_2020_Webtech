<?php 

session_start();

if( isset($_COOKIE['email']) && isset($_COOKIE['pass']))
{
   header('location: sellerhome.html');
}
else
{
	header('location: login.html');
}

?>