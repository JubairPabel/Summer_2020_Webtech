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
 	echo "email can not be empty";
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
    		setcookie('name' , $row['name'] , time()+3600);
           
           if($row['u_type'] == '1' )
           {
        
           }
           else
           if($row['u_type'] == '2' )
           {
           	
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
    			setcookie('status' ,"ok" , time()+3600*60);
    			

                 $_SESSION['name'] = $row['name'];
                  $_SESSION['email'] = $row['email'];
                   $_SESSION['pass'] = $row['pass'];

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