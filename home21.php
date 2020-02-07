<?php  
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2-1 Books Download</title>
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
            <a href="home21.php?file=Discrete_Mathematics_and_Its_Applications_7th_Edition_Kenneth_H_Rosen.pdf"><img src="imgs/dm21.jpg" width="200" height="300" alt="Discrete Mathematics and Its Applications 7th Edition Kenneth H Rosen"/></a>
            <a href="home21.php?file=Solution_of_Discrete_Mathematics_and_Its_Applications_7th_Edition_by_Kenneth_H_Rosen.pdf"><img src="imgs/soldm21.jpg" width="200" height="300" hspace="50" alt="Solution of Discrete Mathematics and Its Applications 7th Edition by Kenneth H Rosen"/></a>
            <a href="home21.php?file=Electronic_Devices_and_Circuit_Theory_11th_Ed_Robert_and_L_Boylestad.pdf"><img src="imgs/eee21.jpg" width="200" height="300" alt="Electronic Devices and Circuit Theory 11th Ed Robert and L Boylestad"/></a>
            <a href="home21.php?file=Solution_of_Electronic_Devices_and_Circuit_Theory_11th_Ed_Robert_and_L_Boylestad.pdf"><img src="imgs/eeesol21.jpg" width="200" height="300" hspace="50" alt="Solution of Electronic Devices and Circuit Theory 11th Ed Robert and L Boylestad"/></a>
            <a href="home21.php?file=Principles_of_Electronics_VK_Mehta.pdf"><img src="imgs/eevk21.jpeg" width="200" height="300" alt="Principles of Electronics VK Mehta"/></a>
            <br><br><br>
            <a href="home21.php?file=Introductory_Method_of_Numerical_Analysis_by_SS_Sastry.pdf"><img src="imgs/na21.jpg" width="200" height="300" alt="Introductory Method of Numerical Analysis by SS Sastry"/></a>
            <a href="home21.php?file=Solution_of_Introductory_Method_of_Numerical_Analysis_by_SS_Sastry.pdf"><img src="imgs/nasol21.jpg" width="200" height="300" hspace="50" alt="Solution of Introductory Method of Numerical Analysis by SS Sastry"/></a>
            <a href="home21.php?file=Matrices_by_PN_Chatterjee.pdf"><img src="imgs/mat21.jpg" width="200" height="300" alt="Matrices by PN Chatterjee"/></a>
            <a href="home21.php?file=Vector_Analysis_Schaums_Series_by_MR_Spiegel.pdf"><img src="imgs/matvec21.jpg" width="200" height="300" hspace="50" alt="Vector Analysis Schaums Series by MR Spiegel"/></a>
            <a href="home21.php?file=Accounting_Principles_by_DE_Kieso_12th_Edition.pdf"><img src="imgs/acc21.jpg" width="200" height="300" alt="Accounting Principles by DE Kieso 12th Edition"/></a>
            <br><br><br>

            <center>
                <button class="btn" name="down21"><i class="fa fa-download"></i> Download All Books as ZIP </button></a>
            </center>
        </form>


        <?php
        if(!empty($_GET['file']))
        {
            $filename = basename($_GET['file']);
            $filepath = 'books21/' . $filename;
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
        if(isset($_GET['down21']))
        {
            header('location:https://drive.google.com/open?id=1g6P6COJg4m3zN_fSzOXhQ-nCMK22vFnS');
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

