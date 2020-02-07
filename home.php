<?php  
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1-1 Books Download</title>
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
            <a href="home.php?file=Fundamentals_of_Electric_Circuits_by_Charles_K_Alexander_and_Matthew_N_O_Sadiku_5th_Edition.pdf"><img src="imgs/eee11.jpeg" width="200" height="300" alt="Fundamentals of Electric Circuits by Charles K. Alexander and Matthew N.O. Sadiku 5th Edition"/></a>
            <a href="home.php?file=Solution_of_Fundamentals_of_Electric_Circuits_by_Sadiku_5th_Edition.pdf"><img src="imgs/eee11sol.jpeg" width="200" height="300" hspace="50" alt="Solution of Fundamentals of Electric Circuits by Charles K. Alexander and Matthew N.O. Sadiku 5th Edition.pdf"/></a>
            <a href="home.php?file=Programming_with_C_2nd Edition_by_Byron_Gottfried.pdf"><img src="imgs/cse11gotfried.jpg" width="200" height="300" alt="Programming with C - 2nd Edition - Byron Gottfried"/></a>
            <a href="home.php?file=C_The_Complete_Reference_by_Herbert_Schildt.pdf"><img src="imgs/cse11hs.jpg" width="200" height="300" hspace="50" alt="C_ The Complete Reference by Herbert Schildt.pdf"/></a>
            <a href="home.php?file=Computer_Fundamentals_by_PK_Sinha.zip"><img src="imgs/cse11cf.jpg" width="200" height="300" alt="Computer Fundamentals by PK Sinha & Priti Sinha"/></a>
            <br><br><br>
            <a href="home.php?file=Essentials_of_Physical_Chemistry_A_Bhal_and_Thuli.zip"><img src="imgs/chem11bt.jpg" width="200" height="300" alt="Essentials_of_Physical_Chemistry_A_Bhal_and_Thuli"/></a>
            <a href="home.php?file=Introduction_to_Linguistics_by_Marcus_Kracht.pdf"><img src="imgs/eng11.jpg" width="200" height="300" hspace="50" alt="Essentials_of_Physical_Chemistry_A_Bhal_and_Thuli"/></a>
            <br><br><br>
            <center>
                <button class="btn" name="down11"><i class="fa fa-download"></i> Download All Books as ZIP </button></a>
            </center>
            

        </form>


        <?php
        if(!empty($_GET['file']))
        {
            $filename = basename($_GET['file']);
            $filepath = 'books11/' . $filename;
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
        if(isset($_GET['down11']))
        {
            header('location:https://drive.google.com/open?id=10ONHjphCNilYAUlf8BRaQ6e2p6o_Lk1M');
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

