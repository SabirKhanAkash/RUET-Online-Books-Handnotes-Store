<?php  
    session_start();
?>

<? ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4-2 Books Download</title>
        <link rel="stylesheet" type="text/css" href="CSS/styleee.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style type="text/css">
        body{
            background-image: url(4_2_error.jpg);
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
    </div>

</body>
</html>
<? ob_flush(); ?>

