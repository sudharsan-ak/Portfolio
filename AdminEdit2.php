<?php
	if(isset($_POST['Edit']))
	{
			$conn = new mysqli("localhost","sudharsa_ak","sudharsan_123","sudharsa_ak");

			if(!$conn)
			{
				echo "Server not connected";
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Database connected")';
				echo '</script>';
				if(!mysqli_select_db($conn,'sudharsa_ak'))
			    {
			      	echo "Database not selected";          
			    }
			    else
			    {
			    	echo '<script language="javascript">';
					echo 'alert("Database selected")';
					echo '</script>';

					$Name = $_POST['Name'];
					$Number = $_POST['Number'];
					$Address = $_POST['Address'];
					$Email = $_POST['Email'];
					$DOB = $_POST['DOB'];
					$Nationality = $_POST['Nationality'];
				

		$sql= "UPDATE about SET Number= '$Number',Nationality='$Nationality',Name='$Name',Address='$Address',Email='$Email',DOB='$DOB' WHERE User='sudharsan_ak'";
					
					if(mysqli_query($conn, $sql))
					{
						echo '<script language="javascript">';
						echo 'alert("Database edited")';
						echo '</script>';
						$url2="AdminEdit.php";
	               	 			echo '<script>window.location = "'.$url2.'";</script>';
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Database not edited")';
						echo '</script>';
						$url2="AdminEdit.php";
	               	 			echo '<script>window.location = "'.$url2.'";</script>';
					}

				}
			}
	}

	if(isset($_POST['Update']))
	{
			$conn = new mysqli("localhost","sudharsa_ak","sudharsan_123","sudharsa_ak");

			if(!$conn)
			{
				echo "Server not connected";
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Database connected")';
				echo '</script>';
				if(!mysqli_select_db($conn,'sudharsa_ak'))
			    {
			      	echo "Database not selected";          
			    }
			    else
			    {
			    	echo '<script language="javascript">';
					echo 'alert("Database selected")';
					echo '</script>';

					$Title = $_POST['Title'];
					$Position = $_POST['Position'];
					$Year = $_POST['Year'];

					$sql= "UPDATE resume SET Title= '$Title',Position='$Position',Year='$Year' WHERE Year='$Year'";
					
					if(mysqli_query($conn, $sql))
					{
						echo '<script language="javascript">';
						echo 'alert("Database edited")';
						echo '</script>';
						$url2="AdminEdit.php";
	               	 			echo '<script>window.location = "'.$url2.'";</script>';
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Database not edited")';
						echo '</script>';
						$url2="AdminEdit.php";
	               	 			echo '<script>window.location = "'.$url2.'";</script>';
					}

				}
			}
	}

?>