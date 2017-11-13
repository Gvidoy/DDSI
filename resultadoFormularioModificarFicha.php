<?php
session_start();
include ("header.php"); ?>

<?php
    
    $numero_chip = $_SESSION["chip"];
    
    
    $fecha_proxima_revision = $_POST['fecha_proxima_revision'];
    $lista_vacunas = $_POST['lista_vacunas'];

   // $sql2 = "SELECT * FROM Ficha_veterinaria WHERE numero_chip='$numero_chip'";
	//$result2 = mysqli_query($conn, $sql2);
	
	//$reg = mysqli_fetch_assoc($result2);
	
	//$union = $row{"lista_vacunas"};
	
//	echo $union;

    $sql = "UPDATE Ficha_veterinaria SET fecha_proxima_revision = '$fecha_proxima_revision', lista_vacunas = '$lista_vacunas' where numero_chip = '$numero_chip'";

    if(mysqli_query($conn,$sql)){
        echo "<br><div class='alert alert-success' role='alert'>modificada correctamente</div>";
    }else{
        echo "<br><div class='alert alert-danger' role='alert'>Error:".$sql."<br>".mysqli_error($conn)."</div>";
    }
    mysqli_close($conn);
 ?>

 
 <?php include ("anadirFicha.php"); ?>
<a href="indexVeterinario.php" class="btn btn-primary">Volver al índice</a>
 <?php include ("footer.php"); ?>