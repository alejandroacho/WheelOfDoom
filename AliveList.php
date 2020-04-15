<?PHP 
include ('C:\xampp\htdocs\Proyectos\FactoriaF5\WheelOfDoom\Connection.php');
    $sql="SELECT name FROM coders WHERE alive='1'";
    $result=mysqli_query($connection,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $mostrar['name']?><br></td>
        </tr>
        <?php
    }
?>