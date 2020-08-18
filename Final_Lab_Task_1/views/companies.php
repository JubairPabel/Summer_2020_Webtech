<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Companies<?=$_SESSION['username']?></h1> 
	<a href="../views/create_company.php">Insert Company Information</a> |
	<a href="../views/company_list.php">Compani list</a> |
	<a href="home.php">Back</a> 
</body>
</html>