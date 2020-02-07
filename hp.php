<?php  
	session_start();
?>

<?php 
	require "dbconfig/config.php";
?>

<html>
<head>
	<title>HOME PAGE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/st.css">
	<link rel="stylesheet" type="text/css" href="CSS/req.css">
	<link rel="stylesheet" type="text/css" href="CSS/btn_hover.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
		body{
			background-image: url(sitebackground.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
    
<body>
	<div id="main-wrapper-2">
		<center>
			<style>
				.bg
				{
					width: 110 px;
					height: 110 px;
					background: rgba(0,0,0,.5);
					color: #fff;
				}
			</style>
			<img class="bg" src="imgs/ruetlogotrans.png" width="100" height="100">
			<style>
				.bg1
				{
					width: 150 px;
					height: 20 px;
					background: rgba(0,0,0,.5);
					color: #fff;
					padding: 0px;	
				}
			</style>
			<h3 class="bg1">Welcome to the Hompage</h3>
			<h3 class="bg1"><?php $hell = $_SESSION["userid"]; echo $hell ?></h3>
			<form class="myform" action="" method="post">
				<button class="button" name="edit"><span>Edit my profile</span></button>
			</form>
			

			<center>
			<form class="myform" action="" method="post"><br>
				<div id="select1">
				<select name="sel1" >	
					<option value=""> Choose Your Department </option>
					<option value="1" >CSE</option>
				</select><br><br>
            	</div>
	            <div id="select2">
					<select name="sel2">	
						<option value=""> Choose Your Year </option>
						<option value="1" >1st</option>
						<option value="2" >2nd</option>
						<option value="3" >3rd</option>
						<option value="4" >4th</option> 
					</select><br><br>
				</div>

				<div id="select3">
					<select name="sel3" >	
						<option value=""> Choose Your Semester </option>
						<option value="1" >Odd</option>
						<option value="2" >Even</option> 
					</select>
				</div>
				<br><br>
				<button class="button"><span>Look for Books</span></button>
				<center>
					<button class="button2" name="clslec" hspace="20"><span>Class Lectures</span></button>
					<button class="button3" name="rtn"><span>Class Routine</span></button><br><br><br><br>
				</center>
				
				<center>
					<label class="labelreqbg">Request Books</label><br>
					<input class="inputreqbg" name="req_books" type="text" placeholder="       Type Book name - author" /><br>
					<button class="button3" name="request"><span>Send Request</span></button><br><br><br><br><br>					
				</center>

				<button class="buttonlo" name="logout"><span>Log Out</span></button><br><br>


			</form>

			
		</center>

			<?php  
				$hell = $_SESSION["userid"];

    			if(isset($_POST['sel1']) && isset($_POST['sel2']) && isset($_POST['sel3'])) 
    			{
	    			$c1= $_POST['sel1'];
	    			$c2= $_POST['sel2'];
	    			$c3= $_POST['sel3'];

					if (isset($c1) && isset($c2) && isset($c3)) {
						if($c1 == "1" && $c2 == "1" && $c3 == "1")
							header('location:home.php');
						if($c1 == "1" && $c2 == "1" && $c3 == "2")
							header('location:home12.php');
						if($c1 == "1" && $c2 == "2" && $c3 == "1")
							header('location:home21.php');
						if($c1 == "1" && $c2 == "2" && $c3 == "2")
							header('location:home22.php');
						if($c1 == "1" && $c2 == "3" && $c3 == "1")
							header('location:home31.php');
						if($c1 == "1" && $c2 == "3" && $c3 == "2")
							header('location:home32.php');
						if($c1 == "1" && $c2 == "4" && $c3 == "1")
							header('location:home41.php');
						if($c1 == "1" && $c2 == "4" && $c3 == "2")
							header('location:home42.php');
						#elseif ($c1 == NULL || $c2 == NULL || $c3 == NULL && $flag = 0) {
							#echo '<script type="text/javascript" charset="utf-8" async defer> alert("Please select your Deptarment, Year and Semester...!!!") </script>';}
					}
					else {
						echo '<script type="text/javascript" charset="utf-8" async defer> alert("Something went wrong...!!!") </script>';
					}
				}

			    if(isset($_POST['logout'])) {
                    session_destroy();
                    header('location:index.php');	
                } 
			    if(isset($_POST['clslec'])) {
                    header('location:https://drive.google.com/open?id=15r6s3zXPqdJi3RibLDlXNARiffiUDKnn');	
                } 

			    if(isset($_POST['rtn'])) {
                    header('location:routine.php');	
                }
               	if(isset($_POST['edit'])) {
                    header('location:editprofile.php');	
                } 
               	if(isset($_POST['request'])) {
                    $req = $_POST['req_books'];	
                    $query = "insert into user_req_relationship values('$hell','$req')";
                    $query_run = mysqli_query($cfg,$query);
                    echo '<script type="text/javascript" charset="utf-8" async defer> alert("Your Book Request has been successfully sent to the Admin. Admins will try to upload your requested book soon. Thank you..!!!") </script>';
                }
			?>	

		</center>	
	</div>
	<center>
		<style>
			.s
			{
				margin-left: 70px;
			}
			.s a{
			  display: inline-flex;
			  width: 40px;
			  height: 40px;
			  background: #2c3e50;
			  color: white;
			  border-radius: 50%;
			  justify-content: center;
			  align-items: center;
			  transition: 0.4s;
			  font-size: 22px;

			}
			.s a:hover{
			  background: royalblue;
			}
			.s a i{
			  transition: 0.4s all;
			}
			.s a:hover > i{
			  transform: scale(1.2) rotate(25deg);
			}
		</style>
		<br><br><br><br><br>
		<br><br><br><br><br>
		<br><br><br><br><br>
		<br><br><br>
    	<div class="s">
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