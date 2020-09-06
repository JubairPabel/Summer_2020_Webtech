<?php
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: ../index.php?error=invalid_request');
	}
?>