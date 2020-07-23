<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<$php
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




	
<div class="test"><span><b>Profile Picture</b></span>
                <div class="inputbox">
                	Name 
                	<input type="text" > <br>
                    <img src="userdp.png" alt="Profile Picture"><br>
                      <input type="file" name="file">

        </div>
        <dir style="padding-left: 90px"><?php echo $p_error ?></dir>
    </div>
    <hr>
    <div class="inputbox">
                    <input type="submit" value="submit" name="submit" >
</form>


</body>
</html>