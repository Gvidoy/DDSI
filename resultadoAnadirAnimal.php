<?php include ("header.php"); ?>

<?php

    $numero_chip = $_POST['numero_chip'];
    $nombre_animal = $_POST['nombre_animal'];
    


    $sql = "INSERT INTO Animal (numero_chip,nombre_animal) VALUES ('$numero_chip','$nombre_animal')";

    if(mysqli_query($conn,$sql)){
        echo "<br><div class='alert alert-success' role='alert'>Insertada correctamente</div>";
    }else{
        echo "<br><div class='alert alert-danger' role='alert'>Error:".$sql."<br>".mysqli_error($conn)."</div>";
    }
    
    mysqli_close($conn);
 ?>

 
 <?php include ("anadirAnimal.php"); ?>
<a href="indexAnimal.php" class="btn btn-primary">Volver al índice</a>
 <?php include ("footer.php"); ?>