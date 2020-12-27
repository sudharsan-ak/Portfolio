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
	
	<title>RESUME & PROJECTS</title>
	<link rel="stylesheet" href="portfolio.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="AboutTitle">
<h1>RESUME & PROJECTS</h1>
</div>
<h2 id="SkillsHeading">
    <span id="SkillsTitle">RESUME</span>
</h2>


<div class="row">
	<div id="col1" class="rescol1">
		<div class = "res1 blue" style="text-align: left;"><strong><font color="White">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Aug 2019';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Title'];
                          }
                        }
                  }
                  ?>
		</strong><br></font></div>


		<div class = "res1 white" style="text-align: left;"><font color="Black">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Aug 2019';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Position'];
                          }
                        }
                  }
                  ?>


		</font></div><br><br><br>

		<div class = "res3 blue" style="text-align: left;"><strong><font color="White">
		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Feb 2017';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Title'];
                          }
                        }
                  }
                  ?>
              </strong><br></font></div>
		<div class = "res3 white" style="text-align: left;"><font color="Black">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Feb 2017';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Position'];
                          }
                        }
                  }
                  ?>
		</font></div><br><br><br>

		<div class = "res5 blue" style="text-align: left;"><strong><font color="White">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='July 2013';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Title'];
                          }
                        }
                  }
                  ?>
		</strong><br></font></div>
		<div class = "res5 white" style="text-align: left;"><font color="Black">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='July 2013';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Position'];
                          }
                        }
                  }
                  ?>
		</font></div><br>


	</div>	
	<div id="col2" class="rescol2">



		<div class="vl"></div>
		<p class = "vtext"><strong><font color="Blue">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Aug 2019';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Year'];
                          }
                        }
                  }
                  ?>
		</font></strong></p><br><br>

		<div class="v2"></div>
		<p class = "vtext2"><strong><font color="Blue">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Jan 2018';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Year'];
                          }
                        }
                  }
                  ?>
		</font></strong></p><br><br>

			<div class="v3"></div>
		<p class = "vtext3"><strong><font color="Blue">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Feb 2017';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Year'];
                          }
                        }
                  }
                  ?>
		</font></strong></p><br><br>

		<div class="v4"></div>
		<p class = "v4"><strong><font color="Blue">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Sep 2016';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Year'];
                          }
                        }
                  }
                  ?>
		</font></strong></p><br><br>

		<div class="v5"></div>
		<p class = "v5"><strong><font color="Blue">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='July 2013';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Year'];
                          }
                        }
                  }
                  ?>
		</font></strong></p><br><br>

		<div class="v6"></div>
<a href="Sudharsan Srinivasan Resume.pdf" download><button class="btn" type="submit" style="width:100%">Download my CV </button><br></a>
	</div>	

	<div id="col3" class="rescol3">

		<br><br><br>
		<div class = "res2 blue" style="text-align: left;"><strong><font color="White">
		<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Jan 2018';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Title'];
                          }
                        }
                  }
                  ?>
              </strong></font></div>
		<div class = "res2 white" style="text-align: left;"><font color="Black">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Jan 2018';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Position'];
                          }
                        }
                  }
                  ?>
		</font></div><br>

		<br><br><br>
		<div class = "res4 blue" style="text-align: left;"><strong><font color="White">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Sep 2016';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Title'];
                          }
                        }
                  }
                  ?>
		</strong></font></div>
		<div class = "res4 white" style="text-align: left;"><font color="Black">
			<?php
                  if(!mysqli_select_db($conn,'sudharsa_ak'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM resume WHERE Year='Sep 2016';";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo $row['Position'];
                          }
                        }
                  }
                  ?>
		</font></div><br>


	</div>

	</div>
	
    	
    <a href="Home.php"><img src="images/nav.jpg" style="float: right; width: 50px; height: 50px;"></a>
</div>
</body>
</html>