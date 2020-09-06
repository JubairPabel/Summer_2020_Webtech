<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<fieldset style="width:100px">
    <legend><b>LOGIN</b></legend>
	<form action="logcheck.php" method="post" onsubmit="" >
	<label>Username:</label><br><input type="text" name="username" onkeyup="load()" ><br>
	<label>Password:</label><br><input type="password" name="password"><br>
	<table>
		<tr>
			<td id="nameMsg"> </td>
		</tr>
	</table>
	<input type="submit" name="login" value="LOG IN" onclick="check()"> <br> Remember Me <input  type="checkbox" name="remember" value="yes"> <br
	</form>
	</fieldset>


	<script type="text/javascript">

       function load()
       {
       	var username = ocument.getElementByname('username').value;

       	var xhttp = new XMLHttpRequest();
		xhttp.open('POST', 'db.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('username='+username);

       }



		function check()
		{
			var username = ocument.getElementByname('username').value;
			var password = ocument.getElementByname('password').value;

			if(username == ""){
		document.getElementById('nameMsg').innerHTML = "username can't left empty";
		return false;

	}
		}

	</script>
</body>
</html>