<?php  
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1-2 Books Download</title>
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
            <a href="home12.php?file=Practical_Physics_by_Dr_Giasuddin_Ahmed_And_MD_Shahabuddin.pdf"><img src="imgs/pracphy12.jpg" width="200" height="300" alt="Practical Physics by Dr Giasuddin Ahmed And MD Shahabuddin"/></a>
            <a href="home12.php?file=Introduction_to_Java_Programming_by_Daniel_Liang.pdf"><img src="imgs/java12.jpg" width="200" height="300" hspace="50" alt="Introduction to Java Programming by Daniel Liang"/></a>
            <a href="home12.php?file=Schaum's_Outline_of_Data_Structures_with_C_by_Seymour_Lipschutz.pdf"><img src="imgs/cseds12.jpg" width="200" height="300" alt="Schaum's Outline of Data Structures with C by Seymour Lipschutz"/></a>
            <a href="home12.php?file=Teach_Yourself_CPP_by_Herbert_Schildt.pdf"><img src="imgs/cpp12.jpg" width="200" height="300" hspace="50" alt="Teach Yourself C++ by Herbert Schildt.pdf"/></a>
            <a href="home12.php?file=Differential_Equations_by_BD_Sharma.pdf"><img src="imgs/mathde12.jpg" width="200" height="300" alt="Differential Equations by BD Sharma"/></a>
            <br><br><br>
            <a href="home12.php?file=Principles_of_Microeconomics_by_N._Gregory_Mankiw.pdf"><img src="imgs/eco12.jpg" width="200" height="300" alt="Principles of Microeconomics by N. Gregory Mankiw"/></a>
            <a href="home12.php?file=Economics_by_Paul_A_Samuelson.pdf"><img src="imgs/econ12.jpg" width="200" height="300" hspace="50" alt="Economics by Paul A Samuelson"/></a>
            <br><br><br>

            <center>
                <button class="btn" name="down12"><i class="fa fa-download"></i> Download All Books as ZIP </button></a>
            </center>

        </form>


        <?php
        if(!empty($_GET['file']))
        {
            $filename = basename($_GET['file']);
            $filepath = 'books12/' . $filename;
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
        if(isset($_GET['down12']))
        {
            header('location:https://drive.google.com/open?id=1L8j4UEqZC3JuHISvAsg-MMgoSQlcN76s');
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

