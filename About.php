<?php
    $conn = new mysqli("localhost","sudharsa_ak","sudharsan_123","sudharsa_ak");
    if(!$conn)
    {
          echo "Server not connected";
    }
/*    else
    {
      echo '<script language="javascript">';
      echo 'alert("Fetching data from database")';
      echo '</script>';
    }
*/    
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>ABOUT</title>
	<link rel="stylesheet" href="portfolio.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2 id="BorderHeading">
    <span id="PageTitle">ABOUT ME</span>
</h2>
<div class="row">
  <div id="column1" class="columnleft">
    <img id="myimage" src = "images/profilepic.jpg" alt="Mypic">
    <p id="imagetext">Software Developer</p>
  </div>
  <div class="column2">
    <ul>
        <li><b><img src="images/name.jpg"><span style="color:blue">Name</span></b></li>
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
                              echo $row['Name'];
                          }
                        }
                  }
                  ?>
        <br><br><br>
        
        <li><b><img src="images/phone.jpg"><span style="color:blue">Phone</span></b></li>       
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
                              echo $row['Number'];
                          }
                        }
                  }
                  ?>
        <br><br><br>
        
        <li><b><img src="images/address.jpg"><span style="color:blue">Address</span></b></li>
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
                              echo $row['Address'];
                          }
                        }
                  }
                  ?>
        <br><br>
    </ul> 
  </div>
  <div class="column3">
    <ul>
        <li><b><img src="images/email.jpg"><span style="color:blue">Email</span></b></li>
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
                              echo $row['Email'];
                          }
                        }
                  }
                  ?>

        <br><br><br>
        <li><b><img src="images/dob.jpg"><span style="color:blue">Date of Birth</span></b></li>       
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
                              echo $row['DOB'];
                          }
                        }
                  }
                  ?>
        <br><br><br>
        <li><b><img src="images/nationality.jpg"><span style="color:blue">Nationality</span></b></li>
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
                              echo $row['Nationality'];
                          }
                        }
                  }
          ?>
        <br><br><br><br>
    </ul> 
</div>
    <div class="new">
      <p style="margin-left:410px"> 
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
                              echo $row['Description'];
                          }
                        }
                  }
          ?>
        <br><br> 
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
                              echo $row['Description2'];
                          }
                        }
                  }
          ?>

        <br> <br> 
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
                              echo $row['PS'];
                          }
                        }
                  }
          ?>

         <br> <br>Yours sincerely </p></p>
         <img src="images/sign.jpg" style="margin-left:410px" height="80" width="200"> 
         <a href="Home.php"><img src="images/nav.jpg" style="float: right; width: 50px; height: 50px;"></a>

  </div>
</div>  
</body>
</html>