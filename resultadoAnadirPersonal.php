<?php include ("header.php"); ?>

<?php
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO Personal (nombre,dni,correo) VALUES ('$nombre','$dni','$correo')";

    if(mysqli_query($conn,$sql)){
        echo "<br><div class='alert alert-success' role='alert'>Personal insertado correctamente</div>";
    }else{
        echo "<br><div class='alert alert-danger' role='alert'>Error:".$sql."<br>".mysqli_error($conn)."</div>";
    }
    mysqli_close($conn);
 ?>
<a href="indexPersonal.php" class="btn btn-primary">Volver al índice</a>
 <?php include ("footer.php"); ?>