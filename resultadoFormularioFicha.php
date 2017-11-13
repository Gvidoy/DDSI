<?php
session_start();
include ("header.php"); ?>

<?php
    
    $numero_chip = $_SESSION["chip"];
    
    
    $fecha_proxima_revision = $_POST['fecha_proxima_revision'];
    $lista_vacunas = $_POST['lista_vacunas'];

    $sql = "INSERT INTO Ficha_veterinaria (numero_chip,fecha_proxima_revision,lista_vacunas) VALUES ('$numero_chip','$fecha_proxima_revision','$lista_vacunas')";

    if(mysqli_query($conn,$sql)){
        echo "<br><div class='alert alert-success' role='alert'>Insertada correctamente</div>";
    }else{
        echo "<br><div class='alert alert-danger' role='alert'>Error:".$sql."<br>".mysqli_error($conn)."</div>";
    }
    mysqli_close($conn);
 ?>

 
 <?php include ("anadirFicha.php"); ?>
<a href="indexVeterinario.php" class="btn btn-primary">Volver al índice</a>
 <?php include ("footer.php"); ?>