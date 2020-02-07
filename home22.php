<?php  
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2-2 Books Download</title>
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
            <a href="home22.php?file=Introduction_to_Algorithms_by_TH_Cormen.pdf"><img src="imgs/caa22.jpg" width="200" height="300" alt="Introduction to Algorithms by TH Cormen"/></a>
            <a href="home22.php?file=Fundamentals_of_Computer_Algorithms_2nd_Edition_by_Horowitz_and_Sahani.pdf"><img src="imgs/ca22.jpg" width="200" height="300" hspace="50" alt="Fundamentals of Computer Algorithms 2nd Edition by Horowitz and Sahani"/></a>
            <a href="home22.php?file=Introduction_to_Automata_Theory_Languages_and_Computation_by_John_Hopcroft_and_Jeffrey_Ullman.pdf"><img src="imgs/auto22.jpeg" width="200" height="300" alt="Introduction to Automata Theory Languages and Computation by John Hopcroft and Jeffrey Ullman"/></a>
            <a href="home22.php?file=Digital_Systems_Principles_and_Applications_by_Ronald_Tocci.pdf"><img src="imgs/dt22.jpg" width="200" height="300" hspace="50" alt="Digital Systems Principles and Applications by Ronald Tocci"/></a>
            <a href="home22.php?file=Solution_of_Digital_Systems_Principles_and_Applications_by_Ronald_Tocci.pdf"><img src="imgs/dtsol22.jpg" width="200" height="300" alt="Solution_of_Digital_Systems_Principles_and_Applications_by_Ronald_Tocci"/></a>
            <br><br><br>
            <a href="home22.php?file=Schaums_Outline_Complex_Variables_by_Murray_R_Spiegel.pdf"><img src="imgs/matcv22.jpg" width="200" height="300" alt="Schaums Outline Complex Variables by Murray R Spiegel"/></a>
            <a href="home22.php?file=Principles_of_Electrical_Machines_by_VK_Mehta.pdf"><img src="imgs/vkmot22.jpg" width="200" height="300" hspace="50" alt="Principles of Electrical Machines by VK Mehta"/></a>
            <a href="home22.php?file=A_Textbook_of_Electrical_Technology_by_BL_Thereja.zip"><img src="imgs/eeemot22.jpg" width="200" height="300" alt="A Textbook of Electrical Technology by BL Thereja"/></a>
            <a href="home22.php?file=A_Course_in_Electrical_and_Electronic_Measurements_and_Instrumentation_by_AK_Sawhney.pdf"><img src="imgs/mes22.jpg" width="200" height="300" hspace="50" alt="A Course in Electrical and Electronic Measurements and Instrumentation by AK Sawhney"/></a>
            <br><br><br>

            <center>
                <button class="btn" name="down22"><i class="fa fa-download"></i> Download All Books as ZIP </button></a>
            </center>
        </form>


        <?php
        if(!empty($_GET['file']))
        {
            $filename = basename($_GET['file']);
            $filepath = 'books22/' . $filename;
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
        if(isset($_GET['down22']))
        {
            header('location:https://drive.google.com/open?id=1GdZvN_3nd4Kw_nBaDhUk2BEpkZYGyVys');
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

