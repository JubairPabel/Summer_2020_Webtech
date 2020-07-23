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
<$php
 $bl_error = "";
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
   	if(empty($_POST["blood"])){
    $bl_error = "Blood group can not be empty";
   }
   else{
           $bl_error = "Your Blood group is -". $_POST["blood"];
        }
   }

$>
<form action="Task 6.php" method = "POST">

<div class="test"><span><b>BLOOD GROUP</b></span>
<div class="inputbox">
<select name="blood">
<option value=""></option>
<option value="A+ve">A+ve</option>
<option value="A-ve">A-ve</option>
<option value="B+ve">B+ve</option>
<option value="B-ve">B-ve</option>
<option value="O+ve">O+ve</option>
<option value="O-ve">O-ve</option>
<option value="AB+ve">AB+ve</option>
<option value="AB-ve">AB-ve</option>
</select>
<?php echo $bl_error ?>
</div>
</div>
<hr>
<input type="submit">
</form>


</body>
</html>