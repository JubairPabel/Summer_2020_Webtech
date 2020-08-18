<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByID($_GET['id']);	
	}else{
		header('location: all_users.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Comopany Information</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit Comopany Information</legend>
			<table>
				<tr>
					<td>Company name</td>
					<td><input type="text" name="cname"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="cdes"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>Company Website</td>
					<td><input type="text" name="cweb"></td>
				</tr>
				<tr>
					<td>Company Logo</td>
					<td><input type="text" name="clogo"></td>
				</tr>
				<tr>
					<td>User account ID</td>
					<td><input type="text" name="uid"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="edit_c" value="Update"> 
						<a href="companies.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>