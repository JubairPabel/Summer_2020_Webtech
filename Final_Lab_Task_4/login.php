<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from users where username like '%{$username}%' and password like '%{$password}%'";

	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {

		
			}

?>