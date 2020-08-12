<?php

session_start();

if(isset($_SESSION['name']) || isset($_COOKIE['remember']))
{

}
	

if(isset($_POST['login']))
{

if ($_POST['email']) 
{
 $email = $_POST['email'];
 if ($email == '') 
{
 	echo "email can not be empty \r \n";
 	$err = '';
}
else
{
 	$err = 'ok';
}
		
}

else
{
  echo "email is Blank";
  $err = '';
}



if(isset($_POST['password']))
{
	$pass = $_POST['password'];
if($pass == '')
{
		echo "Password cannot be empty";
		$err = '';

}
else
{
   $err = 'ok';
}

}
else
{
	echo "Password is blank";
	$err = '';
}

if (isset($_POST["remember"])) 
{
     $remember = $_POST['remember'];
}


if($err == 'ok')
{
	 $conn = mysqli_connect('127.0.0.1', 'root', '', 'protibeshi');
     
     $sql = "select * from users where email = '".$email."' AND pass = '".$pass."'";
     
    if (($result = $conn->query($sql)) !== FALSE)
    {
    	if($row = $result->fetch_assoc())
    	{
    		$_SESSION['id'] = $row['u_id'];
           
           if($row['u_type'] == '1' )
           {
              header('location: sellerhome.html');
           }
           else
           if($row['u_type'] == '2' )
           {
           	header('location: sellerhome.html');
           }
           else
           if($row['u_type'] == '3' )
           {
           	header('location: sellerhome.html');
           }
           else
           {
           	echo "Invalid user";
           }


           if($remember == 'yes')
    		{
    			setcookie('remember' , $row['u_id'] , time()+3600);
    		}
    		else
    		{
    			setcookie('remember', "");
    		}

    		
    	}
    }
    else
    {
       echo "Ivalid Email or password";
    }

}

}
?>