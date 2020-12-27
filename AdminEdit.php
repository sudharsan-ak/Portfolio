<?php
    $conn = new mysqli("localhost","sudharsa_ak","sudharsan_123","sudharsa_ak");
    if(!$conn)
    {
          echo "Server not connected";
    }
?>



<!DOCTYPE html>
<html style="width:100%;height:100%;">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>SUDHARSAN SRINIVASAN</title>
  <link rel="stylesheet" href="portfolio.css">
</head>
<body>

<form method="POST" action="AdminEdit2.php">
		<label style="margin-left: 100px">ABOUT ME</label>
  		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM about;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo '<br>Name <input type="text" name="Name" id="Name" value="'.$row['Name'].'" ><br/>';
                          }
                        }
                  }
  		?>
  <br>
  		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM about;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo 'Number <input type="text" name="Number" id="Number" value="'.$row['Number'].'"><br/>';
                          }
                        }
                  }
  		?>
  <br>
  		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM about;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo 'Address <input type="text" name="Address" id="Address" value="'.$row["Address"].'"><br/>';
                          }
                        }
                  }
  		?>
  <br>
  		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM about;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo 'Email <input type="text" name="Email" id="Email" value="'.$row['Email'].'"><br/>';
                          }
                        }
                  }
  		?>
  <br>
  		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM about;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo 'DOB <input type="text" name="DOB" id="DOB" value="'.$row['DOB'].'"><br/>';
                          }
                        }
                  }
  		?>
  <br>
  		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM about;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo 'Nationality <input type="text" name="Nationality" id="Nationality" value="'.$row['Nationality'].'"><br/>';
                          }
                        }
                  }
  		?>
  <br>
  <input type="submit" value="Edit" name="Edit">
    </form>




    <form method="POST" action="AdminEdit2.php">
    <label style="margin-left: 100px">RESUME</label>
      <?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {
                        $sql = "SELECT * FROM resume;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo '<br>Title<input type="text" name="Title" id="Title" value="'.$row['Title'].'"><br/>
                                    Position<input type="text" name="Position" id="Position" value="'.$row['Position'].'"><br/>
                                    Year<input type="text" name="Year" id="Year" value="'.$row['Year'].'" ><br/>';
                          }
                        }
                  }
      ?>
  <br>
  <input type="submit" value="Update" name="Update">
    </form>

<a href="Admin.php"><img src="images/nav.jpg" style="float: right; width: 50px; height: 50px;"></a>

 </body>
 </html>