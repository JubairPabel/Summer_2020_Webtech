<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="Task 5.php" method="POST">
	
<?php

$de_error ="";

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 	if (empty($_POST["degree"])|| count($_POST["degree"]) < 1) 
 	{
      $de_error = "At least one of them must be selected.";
    } else 
    {
        $de_error = "Recorded";}
    }


?>

<div class="test"><span><b>DEGREE</b></span>
<div class="inputbox">
<input type="checkbox" name="degree[]" value="SSC">SSC
<input type="checkbox" name="degree[]" value="HSC">HSC
<input type="checkbox" name="degree[]" value="BSc">BSc

<?php echo $de_error?>
	

<br>




</div>
</div>

<input type="submit" >

</form>


</body>
</html>