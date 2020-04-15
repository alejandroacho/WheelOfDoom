<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Wheel Of Doom</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Wheel Of Doom | Stranger Strings</h1>

    <div id="formulario">
        <h2>Añadir victima</h2> 
            <form method="POST" action="guardar.php">
                    <label>Nueva victima:</label><br>
                    <input type ="text" name="nombre" placeholder="Nombre"><br><br>
                    <input type="submit" name="" placeholder="Añadir">          
            </form>
    </div>

    <hr>
    <div id="lista-de-vivos">
        <h2>Lista de vivos</h2>
            <table>
                <tr>
                    <th>Coder</th>
                </tr>
                    <?php include ('C:\xampp\htdocs\Proyectos\FactoriaF5\WheelOfDoom\src\View\AliveList.php')?>
        </table>    
    </div>

    <div id="lista-de-muertos">
        <h2>Lista de Muertos</h2>
            <table>
                <tr>
                <th>Coder</th>
                </tr>
                 <?php 
                 include ('C:\xampp\htdocs\Proyectos\FactoriaF5\WheelOfDoom\src\view\Deadlist.php');
                 ?>
            </table>
    </div>
<hr>
<div id="boton">
     <a href="KillerButtonApp.php">MATAR</a>
</div>
</body>
</html>