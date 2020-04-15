<?php
include ('Connection.php');
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHEEL OF DOOM</title>
    <link rel="stylesheet" href="index.css">
    <link href="http://allfont.es/allfont.css?fonts=benguiat" rel="stylesheet" type="text/css" />
</head>

<body>
    
    <header>
        <div class="logo-box">
            <img src="LogoWheel.png" class="logo-image" alt="Logo Image">
        </div>
    </header>
    
    <h1 id="title">RANDOM ELIMINATION SYSTEM</h1>

    <div id="container">
        
        <div class="vivos">
            <h1 id="pxvivos">ALIVE</h1>
            <hr width="75%">
            ';
            include ('Alivelist.php');
            echo'
        </div>
        
        <div class="midcontainer">
        <a href="KillerButtonApp.php">
            <input type="image" src="Boton2.png" id="buttonlogo">
        </a>
        <form method="POST" action="guardar.php">
            <input name="nombre" type="text" class="victim-button" placeholder=" ADD VICTIM">

            <input type="submit" class="right-arrow" value="ADD"> 
        </form> 
        </div>
    
        <div class="muertos">

            <h1 id="pxmuertos">DEAD</h1>
            <hr width="75%">
            ';
            include ('Deadlist.php');
            echo'
        </div>

    </div>

    <div id="video1">
        <video onloadedmetadata="this.muted=true" autoplay loop preload="auto">
            <source src="Video.mp4" type="Video/mp4" />
        </video>
    </div>

    <footer>

        <div id="footer">
        
            <h1 id="textfooter">
                By: Alberto, Alejandro, Bruna, Sebastian, Sergi ©
            </h1>

        </div>
    </footer>

</body>

</html>';
?>