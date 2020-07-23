<!DOCTYPE html>
<html>
<head>
	<title>
		
		Name

	</title>
</head>
<body>

    <?php
    
    $name = "";
    $n_error = "";
   

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    	if(empty($_POST["name"]))
    	{
    		$n_error = "Enter a name please";
    	}
    	else
    	{
    		$rex = "/^[a-zA-Z-.]+[\s][a-zA-Z-.]+$/";
    		if(!preg_match($rex, $_POST["name"]))
    		{
               $n_error = "Minimum requirements not matched!";
    		}
            else
            {
            	$name = $_POST["name"];
                $n_error = "Recorded";	
            } 

    	}

    }

    ?>

	<form action="Task 1.php" method="POST">

   	Name <br>
   	<input type="text" name="name"> <?php echo $n_error ?> 
   	<br>
   	<input type="submit">
    
    </form>


</body>
</html>