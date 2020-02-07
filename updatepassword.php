<?php
	include("config.php");
?>
<!DOCTYPE HTML>
<html>
	<link rel="stylesheet" type="text/css" href="CSS/st.css">
	<link rel="stylesheet" type="text/css" href="CSS/btn_hover.css">
	<link rel="stylesheet" type="text/css" href="CSS/log.css">
	<link rel="stylesheet" type="text/css" href="CSS/socialfp.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<head>
    <title>RESET your password</title>
    	<style type="text/css">
		body{
			background-image: url(LoginBackgroundd.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
		</style>
</head>
<body>
	<div class="log-box">
		<center>
			<h3>Reset Your Password</h3>
		</center>

	
		<form method="post"><br>
			<label><b>New Password</b></label><br>
			<input name="password"type="password" placeholder="Enter new password" /><br><br>
			<label><b>Re-type New Password</b></label><br>
			<input name="repassword"type="password" placeholder="Re-Enter new password" /><br><br>
			<center>
				<button class="buttonlogin" name="reset"><span>Reset</span></button><br><br>
				<button class="backbutton" name="back"><span><<< Back to Sign In</span></button><br><br>
			</center>

		</form>

		<?php
		
			if(isset($_POST["reset"])) {
				# code...
				$code=$_GET["code"];
				$flag = 0;
				$checkmail=mysqli_query($cfg,"SELECT email FROM resetpasswords WHERE  code='$code' ");
				#echo '<script type="text/javascript" charset="utf-8" async defer> alert("Password is reset Successfully...!!!") </script>';
				if(mysqli_num_rows($checkmail)>0) {
					if(isset($_POST["password"]) AND ($_POST["password"]!="")){
							#echo '<script type="text/javascript" charset="utf-8" async defer> alert("Password is reset Successfully...!!!") </script>';
							$password=($_POST["password"]);
							$repassword=($_POST["repassword"]);
							if($password==$repassword) {
								# code...
								#echo '<script type="text/javascript" charset="utf-8" async defer> alert("Password is reset Successfully...!!!") </script>';
								$row = mysqli_fetch_array($checkmail);
								$email = $row["email"];
								$inserted=mysqli_query($cfg,"UPDATE user_info SET Password='$password' WHERE Email='$email' ");
		  					// insert into our table users with new password
								if($inserted) {
									# code...
									echo '<script type="text/javascript" charset="utf-8" async defer> alert("Password is reset Successfully...!!! GO back to Sign in page...!!!") </script>';
								}

							}
							else
							{
								echo '<script type="text/javascript" charset="utf-8" async defer> alert("Password do not match!...!!!") </script>';
							}
					}
				}
				else if(mysqli_num_rows($checkmail)==0)
					$flag = 1;

				if($flag == 1) {
					echo '<script type="text/javascript" charset="utf-8" async defer> alert("Invalid Entry!...!!!") </script>';
					$flag = 0;
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
	</center>
	</body>
</html>
	
