<html>
<head>
	<title></title>
</head>
<body>
	<?php
    
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


     $e_error = "";

	          if($_SERVER["REQUEST_METHOD"]=="POST")
	            {
	            	if (empty($_POST["email"])) 
	            	{
	                  $e_error = "Email can not be empty";

					}
					else 
					{
				     if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
					{

					$e_error = "Invalid email format";
				
					}
					else{

						$e_error = "Recorded";
					}

					}

            }
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

	          if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 	if (empty($_POST["degree"])|| count($_POST["degree"]) < 1) 
 	{
      $de_error = "At least one of them must be selected.";
    } else 
    {
        $de_error = "Recorded";}
    }


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




   $p_error = "";
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));


    $allow = array('jpg','jpeg','png');
    if(!empty($fileName)){
    if (in_array($fileActualExt, $allow)) 
    {
        if($fileError ===0)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDes = 'upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDes);
                
            }
         }
    else{
        $p_error = "Requirements not matched";
    }
}
    else{
        $pperror = "Please Select an image";
    }
 }


	?>
<form>
<table border='1' align="Center" height ='50%' width = '45%'>
	<th colspan="3" align ="Center" height="10%">
		Personal Profile
	</th>
	<tr>
		<td width ="20%" height = "8%"> Name </td>
		<td width="50%"> <input type="text" name="uid" value="" placeholder="" size="50px" align="Center"> </td>
		<td width="5%"></td>
	</tr>
	<tr>
		<td width ="20%" height = "8%"> Email</td>
        <td width="50%"> <input type="email" name="uid" value="" placeholder="" size="50px" align="Center"> </td>
		<td width="5%"></td>
	</tr>
	<tr>
		<td width ="20%" height = "8%"> Gender</td>
		<td> <input type="radio" name="gender" value="" >  Male 
				<input type="radio" name="gender" value="" > Female
				<input type="radio" name="gender" value="" > Other</td>
				<td width="5%"></td>

	</tr>
	<tr>
		<td width ="20%" height = "8%"> Date Of Birth</td>
		<td> <input type="date" name="dob" value="" placeholder=""></td>
		<td width="5%"></td>

	</tr>
	<tr>
		<td width ="20%" height = "8%"> Blood Group</td>
		<td>
			<select name="">
				<option value="">A+</option>
				<option value="">B+</option>
				<option value="">AB+</option>
				<option value="">AB-</option>
				<option value="">O+</option>
				<option value="">O-</option>
				<option value="">B-</option>
				<option value="">A-</option>
             </select>
         </td>
         	<td width="5%"></td>
	</tr>
	<tr>
		<td width ="20%" height = "8%"> Degree</td>
		<td>
			<input type="checkbox" name=""> SSC
					<input type="checkbox" name=""> HSC 
					<input type="checkbox" name=""> BSc.
					<input type="checkbox" name=""> MSc.

		</td>
		<td width="5%"></td>
	</tr>
	<tr>
		<td width ="20%" height = "8%"> Photo</td>
		<td><input type="file" name=""></td>
		<td width="5%"></td>
	</tr>
	<tr>
		<td width="100%" colspan="3" align ="Center" height="8%"></td>
	</tr>
	<tr>
		<td width="100%" colspan="3" align ="Center" height="10%">
			<input type="submit" name="" value="Submit" size="90px" > 
			<input type="reset" name="" value="Clear" width="100%"> 
	</td>

	</tr>
	
</table>
</form>
</body>
</html>