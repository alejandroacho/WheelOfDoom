<?PHP 
    $sql="SELECT name FROM coders WHERE alive='0'";
    $result=mysqli_query($connection,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $mostrar['name']?><br></td>
        </tr>
        <?php
    }
?>