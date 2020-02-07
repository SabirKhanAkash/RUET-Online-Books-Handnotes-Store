<?php 
	require "dbconfig/config.php";

?>

<!DOCTYPE HTML>
<html>
	<link rel="stylesheet" type="text/css" href="CSS/btn_hover.css">
	<link rel="stylesheet" type="text/css" href="CSS/label.css">
	<link rel="stylesheet" type="text/css" href="CSS/reg.css">
	<link rel="stylesheet" type="text/css" href="CSS/socialreg.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<head>
	<title>SIGN-UP PAGE</title>
	<style type="text/css">
		body{
			background-image: url(LoginBackgroundd.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
</head>
<body>
	<div class="reg-box">
		<center>
			<h3>SIGN UP HERE </h3><br>
		</center>

	
		<form action="register.php" method="post" accept-charset="utf-8"><br>
			<label class="labelbg">Student ID/Roll No.</label><br>
			<input name="userid" type="number" placeholder="Type your Student ID/Roll No." required /><br><br>
			<label class="labelbg">Email</label><br>
			<input name="email" type="text" placeholder="Type your valid email" required /><br><br>
			<label class="labelbg">Home Address</label><br>
			<input name="address" type="text" placeholder="Type your Home Address" required/><br><br>
			<label class="labelbg">Mobile Number</label><br>
			<input name="mobile_num" type="number" placeholder="Type your mobile number" required/><br><br>
			<label class="labelbg">Password</label><br>
			<input name="password" type="password" placeholder="Type your password" required/><br><br>
			<label class="labelbg">Confirm Password</label><br>
			<input name="cpassword" type="password" placeholder="Re-type your password" required/><br><br>
			<center>
				<button class="buttonregister" name="register"><span>Sign Up</span></button><br><br>
				<button class="backbutton" name="back" onclick="window.location.href = 'http://localhost/OnlineBookStoreProject/index.php';"><span><<< Back to Sign In</span></button><br><br>
			</center>
		</form>

		<?php
			if (isset($_POST["register"])) 
			{
			    //echo '<script type="text/javascript" charset="utf-8" async defer> alert("Sign up button clicked") </script>';				
				$username = $_POST['userid'];
				$email = $_POST['email'];
				$address = $_POST['address'];
				$mobile_num = $_POST['mobile_num'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				$flag = 0;

				if($password == $cpassword)
				{
					$query = "select * from user_info WHERE userid = '$username' ";
					$query_run = mysqli_query($cfg,$query);

					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type="text/javascript" charset="utf-8" async defer> alert("Student ID already exists !!! Choose another Student ID ...!") </script>';
						$flag = 1;
					}
					else
					{
						$query = "select * from user_info WHERE Email = '$email' ";
						$query_run = mysqli_query($cfg,$query);
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript" charset="utf-8" async defer> alert("Email already exists !!! Try another Email ...!") </script>';
							$flag = 1;
						}
						else
						{
							$query = "select * from user_info WHERE num = '$mobile_num' ";
							$query_run = mysqli_query($cfg,$query);
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript" charset="utf-8" async defer> alert("Phone Number already exists !!! Try another Phone Number...!")</script>';
								$flag = 1;
							}
							else
							{
								$query = "insert into user_info values('$username','$email','$address','$mobile_num','$password')";
								$query_run = mysqli_query($cfg,$query);
							}	

						if($query_run) {
							if($flag == 0)
							echo '<script type="text/javascript" charset="utf-8" async defer> alert("Successfully Registered....Go Back to Sign In Page") </script>';
						}
						else if($flag == 0)
							echo '<script type="text/javascript" charset="utf-8" async defer> alert("ERROR...!!!") </script>';

						}
					}
				}

				else
					echo '<script type="text/javascript" charset="utf-8" async defer> alert("Password and Confirm pasword are not matching") </script>';

			}
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
			<br><br>
	    </div>	
	</center>

</body>
</html>