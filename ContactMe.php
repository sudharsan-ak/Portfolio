<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Contact Me</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<link rel="stylesheet" href="portfolio.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h2 id="ContactHeading">
    <span id="ContactTitle">CONTACT ME</span>
</h2>

<div class="row">
  <div id="column1" class="ContactAddress">
      <h1 style="font-size: 15pt;">CONTACT ADDRESS</h1>
      <br>
      <ul>
        <li><img src="images/address.jpg"><strong><font color="blue">Address:</font></strong>409 Summit Avenue, Apt 319, Arlington, TX 76013, USA</li>
        <br>
        <li><img src="images/phone.png"><strong><font color="blue">Phone:</font></strong>(+1)682-283-0833</li>     
        <br>
        <li><img src="images/email.jpg"><strong><font color="blue">Email:</font></strong><font color="blue">sudharsansreenivasan@gmail.com</font></li>
        <br>
        <li><img src="images/website.jpg"><strong><font color="blue">Linkedin:</font></strong><font color="blue"><a href="https://www.linkedin.com/in/sudharsan-srinivasan-b32aa6131/">
                                                                                                                  https://www.linkedin.com/in/sudharsan-srinivasan-b32aa6131/</a></font></li>
        <br>
        <li><img src="images/website.jpg"><strong><font color="blue">Portfolio:</font></strong><font color="blue"><a href="http://sudharsansrinivasan.uta.cloud/Srinivasan_php/Home.php">
                                                                                                                  http://sudharsansrinivasan.uta.cloud/Srinivasan_php/Home.php</a></font></li>
        <br> 
        <li><img src="images/website.jpg"><strong><font color="blue">GitHub:</font></strong><font color="blue"><a href="https://github.com/sudharsan-ak">
                                                                                                                  https://github.com/sudharsan-ak</a></font></li>
        <br> 
    </ul>

    	
  </div>
 	
   <div id="column2" class="Fun">
      <h1 style="font-size: 15pt;">LET'S HAVE SOME FUN</h1>
      <form method="POST" action="sendemail.php" onsubmit="return cfvalidation()">
  <input type="text" name="name" placeholder="Your Name" id="name" required><br><br>
  <input type="number" name="number" placeholder="Phone Number" id="number" required><br><br>
  <input type="email" name="email" placeholder="Email" id="email" required><br><br>
  <textarea rows="5" cols="50" name="message" placeholder="Your Message" id="message" required></textarea><br><br>
  <input type="submit" value="Send Now" name="sendmail" id="submit">
    </form>
   </div>
   <a href="Home.php"><img src="images/nav.jpg" style="float: right; width: 50px; height: 50px;"></a>
</div>
<script type="text/javascript">
	function cfvalidation()
	{
		var name= document.getElementById('name').value;
		var number= document.getElementById('number').value;
		var email= document.getElementById('email').value;


		if (name.length < 4)
		{
			alert('Name should atleast be 4 characters');
			return false;
		}
		else if (number.length < 10)
		{
			alert('Number should atleast be 10 characters');
			return false;
		}
		else if (email.length < 4)
		{
			alert('Email should atleast be 8 characters');
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
