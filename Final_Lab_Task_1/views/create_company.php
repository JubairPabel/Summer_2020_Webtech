<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Comopany Information</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Insert Comopany Information</legend>
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
						<input type="submit" name="create_c" value="Create"> 
						<a href="companies.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>