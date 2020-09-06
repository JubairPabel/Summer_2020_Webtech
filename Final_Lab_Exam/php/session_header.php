<?php
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: ../views/index.php?error=invalid_request');
	}
?>