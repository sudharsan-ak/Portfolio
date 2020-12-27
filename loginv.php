<?php
	session_start();
	$conn = new mysqli("localhost","sudharsa_ak","sudharsan_123","sudharsa_ak");
	if(!$conn)
	{
		echo "Server not connected";
	}
	
	if(!mysqli_select_db($conn,'sudharsa_ak'))
	{
		echo "Database not selected";
	}

//	echo "Database connected";

	$User = $_POST['User'];
	$Password = $_POST['Password'];

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
        
        if(strlen($User) < 4) 
        {
            $error_message .= 'The User Name you entered does not appear to be valid.<br />';
        } 

        if(strlen($Password) < 4) 
        {
            $error_message .= 'The Password you entered does not appear to be valid.<br />';
        }
          
        if(strlen($error_message) > 0) 
        {
        	echo 'Please return back to the previous screen <br>';
        	die($error_message);
        }


    $sql_q = "SELECT User FROM signup WHERE User='$User' AND Password='$Password'";
		$res = mysqli_query($conn, $sql_q);
		$rowArray = mysqli_fetch_array($res);
		if($User==$rowArray[0])
		{
//		    	$sql = "INSERT INTO signin (User,Password) VALUES('$User','$Password')";
		        $_SESSION["User"]=$User;
		        $_SESSION["Password"]=$Password;
        		if (isset($_SESSION["User"]) && $_SESSION["User"] =='sudharsan_ak')
        		
        		//if (isset($User) && $User =='sudharsan_ak' && $Password == 'sudharsan_123')
            	{
            		$sql = "INSERT INTO signin (User,Password) VALUES('$User','$Password');";
               		$url1="Admin.php";
               		echo '<script>alert("Welcome Admin");</script><script>window.location = "'.$url1.'";</script>';               
            	} 
        		if (isset($User) && $User !='sudharsan_ak')
            	{
            		$sql = "INSERT INTO signin (User,Password) VALUES('$User','$Password')";
	            	$url2="Guest.php";
	                echo '<script>alert("Welcome Guest");</script><script>window.location = "'.$url2.'";</script>';
            	}
		}
		else
		{
			$url="Home.php";
			echo '<script>alert("Invalid username or password");</script><script>window.location = "'.$url.'";</script>';
		}
?>
