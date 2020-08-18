<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="companies.php">Back</a> |
	
	<h3>UCompany list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company name</td>
			<td>Profile Description</td>
			<td>Industry</td>
			<td>Company Website</td>
			<td>Company Logo</td>
			<td>User Account ID</td>
			<td>Action</td>
		</tr>

		<?php  
			$users = getAllCompanies();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['company_name']?></td>
			<td><?=$users[$i]['profile_description']?></td>
			<td><?=$users[$i]['industry']?></td>
			<td><?=$users[$i]['company_website']?></td>
			<td><?=$users[$i]['company_logo']?></td>
			<td><?=$users[$i]['user_account_id']?></td>
			<td>
				<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="delete.php?id=<?=$users[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>