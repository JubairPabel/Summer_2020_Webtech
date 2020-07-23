<!DOCTYPE html>
<html>
<head>
	<style 
	.test {
      border: 1px solid #000000;
      border-top: 1px solid #000000;
      line-height: 0;
      text-align: left;
      margin-top:30px;
      height:70px;
      width:550px;
          }
      .test span {
      background-color: #ffffff;
      padding:5px;
      margin:15px;}


	></style>
	<title></title>
</head>

<body>
 

<?php
     $d_error = "";

	          if($_SERVER["REQUEST_METHOD"]=="POST")
	          {
	          	if (empty($_POST["day"]) || empty($_POST["day"])      
	          	|| empty($_POST["day"])) 
	          	{

                $d_error = "Birthday can not be empty";
                
                }

                else {
                
                 $d_error = "Your Date of Birth is -" . $_POST["day"]." / ".$_POST["month"]." / ".$_POST["year"] ;
                     
                     }
	          
	          }



?>


<form action="Task 4.php" method = "post">

	<div class="test"><span><b>DATE OF BIRTH</b></span>
    <div class="inputbox">
    <p><span style="padding-left: 10px; padding-right: 20px">dd</span><span
    style="padding-right: 20px">mm</span><span>yyyy</span></p>
    <input type="number" name="day" min="1" max="31"> / <input type="number"
    name="month" min="1" max="12"> / <input type="number" name="year" min="1900" max="2016">
    <?php echo $d_error?>
    <hr>
    <input type="submit" >

</div>
</div>

	
</form>

</body>
</html>