<?php  
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-2 Books Download</title>
        <link rel="stylesheet" type="text/css" href="CSS/styleee.css">
        <link rel="stylesheet" type="text/css" href="CSS/btn_hover.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <style type="text/css">
        body{
            background-image: url(mainsitebg.jpg);
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
    <div id="test">
        <form action="" method="GET" >
            <center>   
                <div class="as">            
                    <a href="hp.php"> <img src="imgs/homepage.png" width="50" height="50" alt="Click me to go to homepage"/></a>
                    <br>
                    <label><b>Back to Home Page</b></label>
                </div>
            </center>
            <br>
            <a href="home32.php?file=Digital_Systems_10th_Edition_by_Widmer_Tocci.pdf"><img src="imgs/ds32.jpg" width="200" height="300" alt="Digital_Systems_10th_Edition_by_Widmer_Tocci"/></a>
            <a href="home32.php?file=Modern_Operating_Systems_by_Tanembaum_4th_Edition.pdf"><img src="imgs/mos32.png" width="200" height="300" hspace="50" alt="Modern_Operating_Systems_by_Tanembaum_4th_Edition"/></a>
            <a href="home32.php?file=Operating_System_Concept_by_Silberschatz_8th_Edition.pdf"><img src="imgs/os32.png" width="200" height="300" alt="Operating_System_Concept_by_Silberschatz_8th_Edition"/></a>
            <a href="home32.php?file=Solution_of_Operating_System_Concept_by_Silberschatz_9th_Edition.zip"><img src="imgs/ossol32.png" width="200" height="300" hspace="50" alt="Solution_of_Operating_System_Concept_by_Silberschatz_9th_Edition"/></a>
            <a href="home32.php?file=Routing_Protocol_by_Cisco_Networking_Academy.pdf"><img src="imgs/cisco32.png" width="200" height="300" alt="Routing_Protocol_by_Cisco_Networking_Academy"/></a>
            <br><br><br>
            <a href="home32.php?file=Artificial_Intelligence_A_Modern_Approach_3rd_Edition_by_Russell_and_Norvig.pdf"><img src="imgs/ai32.png" width="200" height="300" alt="Artificial_Intelligence_A_Modern_Approach_3rd_Edition_by_Russell_and_Norvig"/></a>    
            <a href="home32.php?file=Solution_of_Artificial_Intelligence_A_Modern_Approach_3rd_Edition_by_Russell_and_Norvig.pdf"><img src="imgs/aisol32.png" width="200" height="300" hspace="50" alt="Solution_of_Artificial_Intelligence_A_Modern_Approach_3rd_Edition_by_Russell_and_Norvig"/></a>
            <a href="home32.php?file=Microprocessor_and_Interfacing_by_Douglas_V_Hall_2nd_Edition.pdf"><img src="imgs/pi32.png" width="200" height="300" alt="Microprocessor_and_Interfacing_by_Douglas_V_Hall_2nd_Edition"/></a>
            <br><br><br>           
            <center>
                <button class="button" name="prevpg" hspace="20"><span>Previous Page</span></button>
                <button class="button" name="nextpg"><span>Next Page</span></button>
            </center>
            <br><br><br>

            <center>
                <button class="btn" name="down32"><i class="fa fa-download"></i> Download All Books as ZIP </button></a>
            </center>
        </form>


        <?php
        if(!empty($_GET['file']))
        {
            $filename = basename($_GET['file']);
            $filepath = 'books32/' . $filename;
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
        if(isset($_GET['down32']))
        {
            header('location:https://drive.google.com/open?id=1UtvNZDY41oEziH74NBkeTHHYDt3cRL1e');
        }
        if(isset($_GET['prevpg']))
        {
            header('location:home32.php');
        }
        if(isset($_GET['nextpg']))
        {
            header('location:home32pg3.php');
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
        <br><br>
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

