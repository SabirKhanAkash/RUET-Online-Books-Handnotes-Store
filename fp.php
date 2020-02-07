<?php 
	include("dbconfig/config.php");

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="CSS/st.css">
	<link rel="stylesheet" type="text/css" href="CSS/btn_hover.css">
	<link rel="stylesheet" type="text/css" href="CSS/label.css">
	<link rel="stylesheet" type="text/css" href="CSS/fp.css">
	<link rel="stylesheet" type="text/css" href="CSS/socialfp.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<head>
	<title>Recover Your Password</title>
	<style type="text/css">
		body{
			background-image: url(LoginBackgroundd.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
</head>
<body>
	<div class="fp-box">
		<center>
			<h3>Reset Your Password</h3>
		</center>

	
		<form action="fp.php" method="post" accept-charset="utf-8"><br>
			<label class="labelbg"><b>Your Email</b></label><br>
			<input name="email"type="text" placeholder="Type your registered email" /><br><br>
			<center>
				<button class="buttonlogin" name="send"><span>Send</span></button><br><br>
				<button class="backbutton" name="back"><span><<< Back to Sign In</span></button><br><br>
			</center>

		</form>

		<?php
			if (isset($_POST['email']) && ($_POST['email']!="")) {
				# code...
				$email=$_POST['email']; 
				$code=md5(uniqid(true)); 

				$query = mysqli_query($cfg,"INSERT INTO resetpasswords(code,email) VALUES('$code','$email') ");
				
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

					$checkmail=$cfg->query("SELECT Email FROM user_info WHERE Email='$email' ") or die(mysqli_error('Run time error...'));
					$count=mysqli_num_rows($checkmail); 

					if ($count==1) 
					{
						$inserted=$cfg->query("UPDATE user_info SET lost='$code' WHERE Email='$email' ");

						  $to = $email;
						  $subject = "Reset password link";

						  $body = "Here is your link to reset your password. For activating your account, visit the following link : http://localhost/OnlineBookStoreProject/updatepassword.php?email=$email&code=$code";
						  
						  mail($email,$subject,$body,'FROM: sabirkhanakash666@gmail.com');
		  				
		  					
						if ($inserted==0) { 
							
							echo '<script type="text/javascript" charset="utf-8" async defer> alert("Check your mail we have sent you reset link to change your password!") </script>';

						}
					}
					else
					{
						echo '<script type="text/javascript" charset="utf-8" async defer> alert("Oops! Sorry, This email dose not belong to any account!") </script>';
					}

				} else {
					echo '<script type="text/javascript" charset="utf-8" async defer> alert("Oops! Sorry, it is not a valid email address") </script>';
				}
			}

			if(isset($_POST['back']))
				header('location:index.php');
		?>
	</div>

	<center>
	    <div class="s-m">
	    	<label class="labe"><style>.labe{background: rgba(0,0,0,.5); padding: 8px; color: #fff;}</style>Developed by Akash. All Rights Reserved.©</label><br><br>
			<a href="https://www.facebook.com/fnXBlade" target="_blank"><i class="fab fa-facebook-f"></i></a>
			<a href="https://twitter.com/SabirKhanAkash1" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="https://www.linkedin.com/in/sabir-khan-akash-762409160/" target="_blank"><i class="fab fa-linkedin"></i></a>
			<a href="https://github.com/SabirKhanAkash" target="_blank"><i class="fab fa-github"></i></a>
			<a href="https://www.instagram.com/sabir.akash/" target="_blank"><i class="fab fa-instagram"></i></a>
	    </div>	
	    <br>
	</center>

</body>
</html>