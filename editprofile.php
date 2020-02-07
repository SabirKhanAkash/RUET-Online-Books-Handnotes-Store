<?php  
	session_start();
?>

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
	<title>Edit my Info.</title>
	<style type="text/css">
		body{
			background-image: url(sitebackground.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
</head>
<body>
	<div class="reg-box">
		<center>
			<h2>Edit personal info. of <h3><?php  echo $_SESSION["userid"] ?></h3></h2><br>
		</center>

	
		<form action="editprofile.php" method="post" accept-charset="utf-8"><br>
			<label class="labelbg">Home Address</label><br>
			<input name="address" type="text" placeholder="Type your new Home Address" /><br><br>
			<label class="labelbg">Mobile Number</label><br>
			<input name="mobile_num" type="number" placeholder="Type your new mobile number" /><br><br>
			<label class="labelbg">Password</label><br>
			<input name="password" type="password" placeholder="Type your new password" required/><br><br>
			<label class="labelbg">Confirm Password</label><br>
			<input name="cpassword" type="password" placeholder="Re-type your new password" required/><br><br>
			<center>
				<button class="buttonregister" name="edit"><span>Update</span></button><br><br>
				<button class="backbutton" name="back" onclick="window.location.href = 'http://localhost/OnlineBookStoreProject/hp.php';"><span><< Back to Homapage</span></button><br><br>
			</center>
		</form>

		<?php
			if (isset($_POST["edit"])) 
			{
			    //echo '<script type="text/javascript" charset="utf-8" async defer> alert("Sign up button clicked") </script>';				
				$hell = $_SESSION["userid"];
				$address = $_POST['address'];
				$mobile_num = $_POST['mobile_num'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				$flag = 0;

				if($password == $cpassword)
				{
					mysqli_query($cfg,"UPDATE user_info SET Password='$password',num='$mobile_num',address='$address'  WHERE userid='$hell' ");
					echo '<script type="text/javascript" charset="utf-8" async defer> alert("Successfully Updated your info....Go Back to homepage") </script>';		
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