<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 

<?php
     $g_error = "";

	          if($_SERVER["REQUEST_METHOD"]=="POST")
	          {
	          	if (empty($_POST["gender"])) 
	          	{
                    $g_error = " PLease Select gender";

                }
                else
                 {
                    $g_error = "You are ".$_POST["gender"];
                 }
	          
	          }



?>


<form action="Task 3.php" method = "post">

	Gender

	<input type="radio" name="gender" value="Male">
	Male
	<input type="radio" name="gender" value="Female">
	Female
	<input type="radio" name="gender" value="Other">
	Other <br>
	<input type="submit"> <br>
	<?php echo $g_error ?>

</form>

</body>
</html>