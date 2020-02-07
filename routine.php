<?php  
    session_start();
?>

<html>
<head>
	<title>Download Routine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/styleee.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
		body{
			background-image: url(sitebackground.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
    <style>
    .btn {
      background-color: forestgreen;
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
    }
    .btn:hover {
      background-color: RoyalBlue;
    }
</style>
<body>
	<style>
		.stt
		{
			padding: 10px;
			margin: 18px;

		}
	</style>
	<div class="stt">
		<center>
			<div class="as">            
                <a href="hp.php"> <img src="imgs/homepage.png" width="50" height="50" alt="Click me to go to homepage"/></a>
                <br>
                <label><b>Back to Home Page</b></label>
            </div>
            <br><br>
			<img src="imgs/routin.png" width="1233" height="650" alt="Routine of All Series">
			<br><br><br>
			<a href="routine.php?file=RoutineOfAl.pdf"><button class="btn"><i class="fa fa-download"></i> Download Routine as PDF </button></a>
			<br><br><br>

		</center>	

		<?php
	        if(!empty($_GET['file']))
	        {
	            $filename = basename($_GET['file']);
	            $filepath = 'routine/' . $filename;
	            if(!empty($filename) && file_exists($filepath)){
	         
	                header("Cache-Control: public");
	                header("Content-Description: FIle Transfer");
	                header("Content-Disposition: attachment; filename=$filename");
	                header("Content-Type: application/zip");
	                header("Content-Transfer-Emcoding: binary");
	         
	                readfile($filepath);
	                exit;
	         
	            }
	            else{
	                echo "This File does not exist !!!";
	            }
	        }
        ?>
	</div>

	<center>
		<style>
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