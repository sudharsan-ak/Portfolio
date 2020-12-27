<!DOCTYPE html>
<html style="width:100%;height:100%;">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>SUDHARSAN SRINIVASAN</title>
  <link rel="stylesheet" href="portfolio.css">
  
<script type="text/javascript" src="popup.js"></script>
<script>
  window.onload = function()
{
  document.getElementById('login').addEventListener('click',
  function(){
    document.querySelector('.bg-modal').style.display = 'flex';
  }
  );

  document.querySelector('.close').addEventListener('click',
  function(){
    document.querySelector('.bg-modal').style.display = 'none';
  }
  );

  document.getElementById('signup').addEventListener('click',
  function(){
    document.querySelector('.bg-modal2').style.display = 'flex';
  }
  );

  document.querySelector('.signupclose').addEventListener('click',
  function(){
    document.querySelector('.bg-modal2').style.display = 'none';
  }
  );
}
</script>
</head>
<body style="width:100%;height:100%;">

<div class="wrapper">
    <div class="sidebar">
        <h1><img src="images/logo.jpg" alt="logo" style="width: 150px;height: 150px;"></h1>  
        <h3>Sudharsan Srinivasan</h3>
        <ul>
            <br>
            <li><a href="Home.php"><strong>HOME</strong></a></li>
            <br>
            <li><a href="About.php"><strong>ABOUT</strong></a></li>
            <br>
            <li><a href="Skills.php"><strong>SKILLS</strong></a></li>
    <!--    <li><a href="Resume.php"><strong>RESUMES & PROJECTS</strong></a></li>-->
            <br>
            <li><a href="Projects.php"><strong>PROJECTS</strong></a></li>
            <br>
            <li><a href="Experience.php"><strong>EXPERIENCE</strong></a></li>
    <!--    <li><a href="Portfolio.php"><strong>PORTFOLIO</strong></a></li>-->
            <br>
            <li><a href="Blog.php"><strong>BLOG</strong></a></li>
<!--        <li><a href="HireMe.php"><strong>HIRE ME</strong></a></li>-->
            <br>
            <li><a href="ContactMe.php"><strong>CONTACT ME</strong></a></li>
<!--            <li><a href="#" id="login"><strong>LOG IN</strong></a></li>-->
<!--            <li><a href="#" id="signup"><strong>SIGN UP</strong></a></li>-->
     <!--       <div class="sideBarFooter"><p>&copy; Diaz Apps ALL RIGHTS<br> 
                RESERVED BY <span style="color: blue">Sudharsan<br>Srinivasan</span></p></div>-->
        </ul> 
    </div>
   
    <div class="main_content">
        <div class="HOME">
          <h1> Hello I'm </h1>
          <h2> Sudharsan Srinivasan </h2>
      </div>
      <a href="Sudharsan Srinivasan Resume.pdf" download><button class="btn" type="submit" style="width:15%">Download my CV </button><br></a>  
    </div>

</div>

<div class="bg-modal">
      <div class="modal-content" style="color:black">
        <h2 style="float:left;">Log In<span class="close">+</span></h2>  
<!--    ?php
        if(isset($_GET['error']))
        {
        	echo '<script>document.querySelector(\'.bg-modal\').style.display =\'flex\';</script>';
        	echo "<p align='center'><font color=red  size='4pt'>All fields are required</font> </p>";
        }
    ?>        
--> 
        <form action="loginv.php" method="POST" style="clear:both" onsubmit="return loginvalidation()">
          <label>User:</label>
          <input type="text" class="input" name="User" id="User" required>
          <label>Password:</label>
          <input type="password" class="input" name="Password" id="Password" required>
          <button type="submit" style="float:right;">Get In</button>
        </form>
      </div>
</div>


<div class="bg-modal2">
      <div class="bg-modal2-content" style="color:black">
        <h2 style="float:left;">Sign Up<span class="signupclose" >+</span></h2>    
<!--?php
        if(isset($_GET['error1']))
        {
        	echo '<script>document.querySelector(\'.bg-modal2\').style.display =\'flex\';</script>';
        	echo "<p align='center'><font color=red  size='4pt'>All fields are required</font> </p>";
        }
?>  
-->      
        <form action="signupv.php" method="POST" style="clear: both" onsubmit="return signvalidation()">
          <label>Name:</label>
          <input type="text" class="input" name="Name" id="Name" required>
          <label>Last Name:</label>
          <input type="text" class="input" name="LastName" id="LastName" required>
          <label>Email:</label>
          <input type="email" class="input" name="Email" id="Email" required>
          <label>User:</label>
          <input type="text" class="input" name="User" id="User" required>
          <label>Password:</label>
          <input type="password" class="input" name="Password" id="Password" required>
          <label>Repeat password:</label>
          <input type="password" class="input" name="Repeat" id="Repeat" required>
          <button type="submit" style="float:right;">Get In</button>
        </form>
      </div>
</div>

<script type="text/javascript">
	function signvalidation()
	{
		var Name= document.getElementById('Name').value;
		var LastName= document.getElementById('LastName').value;
		var Email= document.getElementById('Email').value;
		var User= document.getElementById('User').value;
		var Password= document.getElementById('Password').value;
		var Repeat= document.getElementById('Repeat').value;


		if(Name.length < 4)
		{
			alert('Name should atleast be 4 characters');
			return false;
		}
		else if (LastName.length < 4)
		{
			alert('LastName should atleast be 4 characters');
			return false;
		}
		else if (Email.length < 4)
		{
			alert('Email should atleast be 4 characters');
			return false;
		}
		else if (User.length < 4)
		{
			alert('User should atleast be 4 characters');
			return false;
		}
		else if (Password.length < 4)
		{
			alert('Password should atleast be 4 characters');
			return false;
		}
		else if (Repeat.length < 4)
		{
			alert('Repeat should atleast be 4 characters');
			return false;
		}
		else if (Password !== Repeat)
		{
			alert('Passwords don't match');
			return false;
		}
		
		else
		{
			return true;
		}

	}

</script>

<script type="text/javascript">
	function loginvalidation()
	{
		var User= document.getElementById('User').value;
		var Password= document.getElementById('Password').value;


		if (User.length < 4)
		{
			alert('User should atleast be 4 characters');
			return false;
		}
		else if (Password.length < 4)
		{
			alert('Password should atleast be 4 characters');
			return false;
		}
		else
		{
			return true;
		}

	}

</script>


</body>
</html>