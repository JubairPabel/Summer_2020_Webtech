<?php

	$email = $_POST['email'];

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from users where email like '%{$email}%'";

	$result = mysqli_query($conn, $sql);

	$data = "<table border=2> 
				<tr>
					<td>Email</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		if($row['email'] == $email){
			$data .= "<tr>
							<td>Email Exists </td>
					</tr>";
		}
		}
	

	$data .= "</table>";

	echo $data;

?>