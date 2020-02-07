<?php  
    session_start();
?>

<? ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4-1 Books Download</title>
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
            <a href="home41.php?file=Compilers_Principles_Techniques_and_Tools_2nd_Edition_by_Alfred_V_Aho.pdf"><img src="imgs/cd41.png" width="200" height="300" alt="Compilers_Principles_Techniques_and_Tools_2nd_Edition_by_Alfred_V_Aho"/></a>
            <a href="home41.php?file=Solution_of_Compilers_Principles_Techniques_and_Tools_2nd_Edition_by_Alfred_V_Aho.zip"><img src="imgs/cdsol41.png" width="200" height="300" hspace="50" alt="Solution_of_Compilers_Principles_Techniques_and_Tools_2nd_Edition_by_Alfred_V_Aho"/></a>
            <a href="home41.php?file=Logic_Computer_Design_Fundamentals_5th_Edition_by_M_Morris_Mano_Charles_R_Kime_Tom_Martin.pdf"><img src="imgs/lcd41.png" width="200" height="300" alt="Logic_Computer_Design_Fundamentals_5th_Edition_by_M_Morris_Mano_Charles_R_Kime_Tom_Martin"/></a>
            <a href="home41.php?file=Digital_Image_Processing_by_Rafael_C_Gonzalez_2nd_Edition.pdf"><img src="imgs/dip41.jpg" width="200" height="300" hspace="50" alt="Digital_Image_Processing_by_Rafael_C_Gonzalez_2nd_Edition"/></a>
            <a href="home41.php?file=Solution_of_Digital_Image_Processing_by_Rafael_C_Gonzalez_2nd_Edition.pdf"><img src="imgs/dipsol41.jpg" width="200" height="300" alt="Solution_of_Digital_Image_Processing_by_Rafael_C_Gonzalez_2nd_Edition"/></a>
            <br><br><br>
            <a href="home41.php?file=Digital_Image_Processing_Using_MATLAB_by_Rafael_C_Gonzalez.pdf"><img src="imgs/dipum41.jpg" width="200" height="300" alt="Digital_Image_Processing_Using_MATLAB_by_Rafael_C_Gonzalez"/></a>
            <a href="home41.php?file=Digital_Signal_Processing_4th_Edition_by_Proakis_and_Manolakis.pdf"><img src="imgs/dsp41.jfif" width="200" height="300" hspace="50" alt="Digital_Signal_Processing_4th_Edition_by_Proakis_and_Manolakis"/></a>
            <a href="home41.php?file=Solution_of_Digital_Signal_Processing_4th_Edition_by_Proakis_and_Manolakis.pdf"><img src="imgs/dspsol41.png" width="200" height="300" alt="Solution_of_Digital_Signal_Processing_4th_Edition_by_Proakis_and_Manolakis"/></a>
            <a href="home41.php?file=Distributed_System_Principles_and_Paradigms_by_Andrew_S_Tanenbaum_Maarten_van_Steen.pdf"><img src="imgs/dspp41.jfif" width="200" height="300" hspace="50" alt="Distributed_System_Principles_and_Paradigms_by_Andrew_S_Tanenbaum_Maarten_van_Steen"/></a>
            
            <br><br><br>
            <center>
                <button class="btn" name="down41"><i class="fa fa-download"></i> Download All Books as ZIP </button></a>
            </center>
        </form>
        <?php
            if(!empty($_GET['file']))
            {
                $filename = basename($_GET['file']);
                $filepath = 'books41/' . $filename;
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
            if(isset($_GET['down41']))
            {
                header('location:https://drive.google.com/open?id=1B8jmnWW407h0H1X8u1ojz1ZfIFox7R-I');
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

