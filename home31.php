<?php  
    session_start();
?>

<? ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-1 Books Download</title>
        <link rel="stylesheet" type="text/css" href="CSS/styleee.css">
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
            <a href="home31.php?file=Assembly_Language_Programming_and_Organization_of_the_IBM_PC_by_Ytha_and_Marut.pdf"><img src="imgs/ass31.png" width="200" height="300" alt="Assembly Language Programming and Organization of the IBM PC by Ytha and Marut"/></a>
            <a href="home31.php?file=Data_Communications_and_Networking_By_Behrouz_A_Forouzan.pdf"><img src="imgs/dat31.png" width="200" height="300" hspace="50" alt="Data Communications and Networking By Behrouz A Forouzan"/></a>
            <a href="home31.php?file=Database_System_Concepts_6th_Edition_by_Abraham_Silberschatz.pdf"><img src="imgs/db31.png" width="200" height="300" alt="Database System Concepts 6th Edition by Abraham Silberschatz"/></a>
            <a href="home31.php?file=Introduction_to_Mathematical_Statistics_by_Robert_V_Hogg_Allen_Cra.pdf"><img src="imgs/stat31.jpg" width="200" height="300" hspace="50" alt="Introduction to Mathematical Statistics by Robert V Hogg Allen Cra"/></a>
            <a href="home31.php?file=Probability_and_Statistical_inference_9th_Edition.pdf"><img src="imgs/statp31.jpg" width="200" height="300" alt="Probability and Statistical inference 9th Edition"/></a>
            <br><br><br>
            <a href="home31.php?file=Software_Engineering_9th_Edition_by_RPL_Sommerville.pdf"><img src="imgs/soft31.png" width="200" height="300" alt="Software Engineering 9th Edition by RPL Sommerville"/></a>
            <a href="home31.php?file=Software_Engineering_By_Pressman_5th_Edition.pdf"><img src="imgs/softp31.jpg" width="200" height="300" hspace="50" alt="Software Engineering By Pressman 5th Edition"/></a>
            <a href="home31.php?file=Solution_Manual_to_Introduction_to_Mathematical_Statistics_6th_Edition_by_Hog.pdf"><img src="imgs/statsol31.jpg" width="200" height="300" alt="Solution Manual to Introduction to Mathematical Statistics 6th Edition by Hog"/></a>
            <a href="home31.php?file=The_Intel_Microprocessor_by_Barry_b_Brey.pdf"><img src="imgs/mic31.jpg" width="200" height="300" hspace="50" alt="The Intel Microprocessor by Barry b Brey"/></a>
            <a href="home31.php?file=Solution_of_The_Intel_Microprocessor_by_Barry_b_Brey.pdf"><img src="imgs/micsol31.jpg" width="200" height="300" alt="Solution_of_The Intel Microprocessor by Barry b Brey"/></a>
            <br><br><br>
            <center>
                <button class="btn" name="down31"><i class="fa fa-download"></i> Download All Books as ZIP </button></a>
            </center>
        </form>
        <?php
            if(!empty($_GET['file']))
            {
                $filename = basename($_GET['file']);
                $filepath = 'books31/' . $filename;
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
            if(isset($_GET['down31']))
            {
                header('location:https://drive.google.com/open?id=1pL6y_ie_2IYKmHCtZ84xLhWR7gLDOrXj');
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
<? ob_flush(); ?>

