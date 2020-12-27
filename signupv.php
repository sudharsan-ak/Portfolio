<?php

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

	$Name = $_POST['Name'];
	$Last_Name = $_POST['LastName'];
	$Email = $_POST['Email'];
	$User = $_POST['User']	;
	$Password = $_POST['Password'];
	$Repeat_Password = $_POST['Repeat'];

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
        
        if(!preg_match($email_exp,$Email)) 
        {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }
         
         
        if(!preg_match($string_exp,$Name)) 
        {
            $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        }

        if(!preg_match($string_exp,$Last_Name)) 
        {
            $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
        }
        
        if(strlen($User) < 4) 
        {
            $error_message .= 'The User Name you entered does not appear to be valid.<br />';
        } 

        if(strlen($Password) < 4) 
        {
            $error_message .= 'The Password you entered does not appear to be valid.<br />';
        }
         
        if(strlen($Repeat_Password) < 4) 
        {
            $error_message .= 'Repeat Password you entered do not appear to be valid.<br />';
        }
         
        if(strlen($error_message) > 0) 
        {
        	echo 'Please return back to the previous screen <br>';
        	die($error_message);
        }


	$query = "SELECT * FROM  'signup'  WHERE 'User'='$User'";
	$result = mysqli_query($query);
	if(!mysqli_num_rows($result))
	{
		
		$sql = "INSERT INTO signup (Name,Last_Name,Email,User,Password,Repeat_Password) 
			VALUES('$Name','$Last_Name','$Email','$User','$Password','$Repeat_Password')";			
	}

	if(!mysqli_query($conn,$sql))
	{
		echo '<script language="javascript">';
    	echo 'alert("User already exists")';
    	echo '</script>';
	}
	
	else
	{
		echo '<script language="javascript">';
    	echo 'alert("New User")';
    	echo '</script>';
		echo '<script language="javascript">';
    	echo 'alert("Signup Success")';
    	echo '</script>';
    	$url2="Guest.php";
	echo '<script>alert("Welcome Guest");</script><script>window.location = "'.$url2.'";</script>';
	}

header("refresh:2; url=Home.php");

?>
