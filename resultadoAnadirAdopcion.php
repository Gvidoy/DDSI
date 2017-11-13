<?php include ("header.php"); ?>

<?php
    $numero_chip = $_POST['numero_chip'];
    $dni_adoptante = $_POST['dni_adoptante'];
    
    $sql2 = "SELECT numero_chip FROM Animal WHERE numero_chip='$numero_chip'";
	$result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        $sql = "INSERT INTO Adopcion (numero_chip,dni_adoptante) VALUES ('$numero_chip','$dni_adoptante')";
        if(mysqli_query($conn,$sql)){
            echo "<br><div class='alert alert-success' role='alert'>Adopción insertada correctamente</div>";
        }else{
            echo "<br><div class='alert alert-danger' role='alert'>Error:".$sql."<br>".mysqli_error($conn)."</div>";
        }
    } 
    else{
				echo "<br><div class='alert alert-danger' role='alert'>No existe el perro</div>";
    }
 ?>

 
 <?php include ("anadirAdopcion.php"); ?>
<a href="indexAdopciones.php" class="btn btn-primary">Volver al índice</a>
 <?php include ("footer.php"); ?>