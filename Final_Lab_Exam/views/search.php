
<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

<form>
			<input type="text" id="name" name="name" onkeyup="load()" /> 
			<input type="button" id="button" name="button" value="Click" /> 
		</form>
>
<div id="searchdata"></div>
<script>
			function load(){

				var name = document.getElementById('name').value;
				var xhttp = new XMLHttpRequest():
				xhttp.open('POST', '../service/search.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name);

				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){

						if(this.responseText != ""){
							document.getElementById('searchdata').innerHTML = this.responseText;
						}else{
							document.getElementById('searchdata').innerHTML = "";
						}
						
					}	
				}
			}
		</script>



</body>
</html>