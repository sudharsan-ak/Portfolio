<?php

	if(iiset($_POST['submit']))
	{
		require 'phpmailer/PHPMailerAutoload.php';

		function sendemail($to, $from, $fromName, $message)
		{
			$mail = new PHPMailer();
			$mail-> setFrom($from, $fromName);
			$mail-> addAddress($to);
			$mail->Subject= 'Contact form - Email';
			$mail->message=$message;
			$mail-> isHTML(false);

			return $mail-> send();
		}

			$name = $_POST['name'];
			$number = $_POST['number'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			if(sendemail('sudharsansreenivasan@gmail.com', $email, $name, $number, $message))
			{
				echo 'Mail sent';
			}
			else
			{
				echo 'Mail not sent';
			}
	}
?>