<?php
    session_start(); 
   $conn = mysqli_connect('127.0.0.1', 'root', '', 'protibeshi');
   $err = '';
    if(isset($_SESSION['name']) || isset($_COOKIE['remember'])){
        header("location:dashboard.php");
        die();
    }

    $name = $email = "";
    if (isset($_POST['submit'])) {
        if (isset($_POST['name'])) {
            $name = strtolower(trim($_POST['name']));
            if ($name == '') {
                echo'Name can not be empty';
                $err = '';
            }
            else 
            {
            	$err ='ok';
            }
        } else {
            echo'Name is required';
            $err = '';
        }

        if (isset($_POST['pass'])) {
            $pass = $_POST['pass'];
            if ($pass == '') {
                echo'Password can not be empty';
                $err = '';
            } else {
            	if(strlen($pass) <= 6) {
            		echo"Password can't be less than 6 characters";
            		$err = '';
            	}
            	else {
            		$err ='ok';
            	}
            }
        } else {
            echo'Password is required';
            $err = '';
        } 

        if (isset($_POST['email'])) {
            $email = trim($_POST['email']);
            if (!$email == '') {
                if (substr_count($email, ' ') == 0) {
                    if (substr_count($email, '@') == 0) {
                        echo'Email must have "@"';
                    } else if (substr_count($email, '@') == 1) {
                        if (strpos($email, '@') != 0) {
                            if (substr_count($email, '.') != 0) {
                                $atpos = strpos($email, '@');
                                $domainPart = substr($email, $atpos + 1);

                                $dotpos = strrpos($domainPart, '.');
                                $domainExt = substr($domainPart, $dotpos + 1);
                                $domainName = str_replace('.' . $domainExt, "", $domainPart);
                                if (strlen($domainName) > 0 && validateDomainName($domainName)) {
                                    if (strlen($domainExt) > 1 && validateDomainExt($domainExt)) {
                                    	$err ='ok';
                                    } else {
                                        echo'Email must have more than 1 letter and letters only after last ".", should not start with number.';
                                        $err = '';

                                    }
                                } else {
                                    echo'Email can only have dot(.), dash(-), chracters and numbers between "@" and last "." with no adjacent "@" or "."';
                                    $err = '';
                                }
                            } else {
                                echo'Email must have "."';
                                $err = '';
                            }
                        } else {
                            echo'Email can not start with "@"';
                            $err = '';
                        }                   
                    } else {
                        echo'Email can not have multiple "@"';
                        $err = '';
                    } 
                } else {
                    echo'Email can not have spaces';
                    $err = '';
                }
            } else {
                echo'Email can not be empty';
                $err = '';
            }
        } else {
            echo'Email is required';
            $err = '';
        }
        
        if (isset($_POST['Utype']))
        {
        	$utype = $_POST['Utype'];

        	if($utype == '0')
        	{
        		echo "User Type required";
        		$err = '';
        	}
        	else
        	{
        		$err= 'ok';
        	}

        }
        else
        {
        	echo "User Type is Required";
        	$err = '';
        }



        $sql = "select email from users where email = '".$email."'";
        if (($result = $conn->query($sql)) !== FALSE)
        {
            while($row = $result->fetch_assoc())
            {
                echo"Email is taken";
                $err = '';
            }
        }

        if ($err == 'ok')  
        	 {

			$sql = "INSERT INTO users (name, email, pass,u_type)
			VALUES ('$name', '$email', '$pass' , '$utype')";

			if ($conn->query($sql) === TRUE) {
			  $error = "New record created successfully";
			  header('location: login.html');
			}

			$conn->close();
        }            
    }

    function validateDomainName($string) {
        foreach (explode(".", $string) as $part) {
            if ($part == '') {
                return false;
            }
        }
        $array = str_split($string);
        foreach ($array as $value) {
            if ($value == '-' || $value == '.' || is_numeric($value) || ctype_alpha($value)) {
                continue;
            } else {
                return false;
            }
        }
        return true;
    }

    function validateDomainExt($string) {
        if (is_numeric($string[0])) {
            return false;
        }
        $array = str_split($string);
        foreach ($array as $value) {
            if (is_numeric($value) || ctype_alpha($value)) {
                continue;
            } else {
                return false;
            }
        }
        return true;
    }
    ?>