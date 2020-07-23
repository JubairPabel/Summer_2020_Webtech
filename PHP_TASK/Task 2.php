<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
         
         $n_error = "";

	          if($_SERVER["REQUEST_METHOD"]=="POST")
	            {
	            	if (empty($_POST["email"])) 
	            	{
	                  $n_error = "Email can not be empty";

					}
					else 
					{
				     if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
					{

					$n_error = "Invalid email format";
				
					}
					else{

						$n_error = "Recorded";
					}

					}

            }

	?>

     <form action="Task 2.php" method="POST">

     	Email 
     	<input type="Email" name="email"> <?php echo $n_error ?><br>
        <input type="submit">
     
     </form>



</body>
</html>