<?php
     $conexion= mysqli_connect('localhost', 'root', "", 'base_de_coders');
     $insertar=$_POST['nombre'];
     $add="INSERT INTO coders values('','$insertar', '1')";
     $query=mysqli_query($conexion, $add);

     echo'<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Wheel of doom</title>
                <link rel="stylesheet" href="addedstyle.css">
                <link href="http://allfont.es/allfont.css?fonts=benguiat" rel="stylesheet" type="text/css" />
            </head>
            <body>
                <div class="box-text">
                </div>
                <div class="return-box" alt="Return Button">
                <a href="index.php">
                    <input type="button" class="return-button" value="Return">
                <a/>    
                </div>
            </body>
            <footer>
            </footer>
            </html>';
?>