<?php 
	session_start();
	require "dbconfig/config.php";

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="CSS/st.css">
	<link rel="stylesheet" type="text/css" href="CSS/btn_hover.css">
	<link rel="stylesheet" type="text/css" href="CSS/label.css">
	<link rel="stylesheet" type="text/css" href="CSS/log.css">
	<link rel="stylesheet" type="text/css" href="CSS/social.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<head>
	<title>SIGN IN PAGE</title>
	<style type="text/css">
		body{
			background-image: url(LoginBackgroundd.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
<body>
	<div class="log-box">
		<center>

			<h2 >SIGN IN HERE </h2><br>
		</center>

	
		<form action="index.php" method="post" accept-charset="utf-8"><br>
			<label class="labelbg"><b>Roll No.</b></label><br>
			<input name="userid" type="number" placeholder="Type your Student ID/Roll No." /><br><br>
			<label class="labelbg">Password</label><br>
			<input name="password" type="password"  placeholder="Type your password" /><br><br>
			<center>
				<button class="buttonlogin" name="login"><span>Sign In</span></button><br><br>
			</center>
			<center>
				<button class="buttonreg" name="reg"><span>Create an Account</span></button>
				<button class="buttonfp" name="fpass"><span>Forgot password ?</span></button>
			</center>

		</form>
		<?php

			if (isset($_POST['login'])) 
			{
				$flag = 0;
				$username = $_POST['userid'];
				$password = $_POST['password'];
				

				$query = "select * from user_info WHERE userid = '$username' AND Password= '$password' ";
				$query_run = mysqli_query($cfg,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					$_SESSION['userid'] = $username;
					$_SESSION['password'] = $password;
					header('location:hp.php');
				}
				else if(mysqli_num_rows($query_run)==0)
					$flag = 1;

				if($flag == 1)
				{
					echo '<script type="text/javascript" charset="utf-8" async defer> alert("Invalid Student ID or Password") </script>';	
					$flag = 0;
				}
			}
			elseif (isset($_POST['reg'])) {
				header('location:register.php');
			}
			elseif (isset($_POST['fpass'])) {
				header('location:fp.php');
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
	    </div>	
	    <br>
	</center>

</body>
</html>