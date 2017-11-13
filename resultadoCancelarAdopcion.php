<?php include ("header.php"); ?>
<div class="row">
<div class="col-md-8">
<?php

if(isset($_POST['Consultar'])){

	$numero_chip = $_POST['numero_chip'];
	

	$sql = "DELETE from Personal WHERE numero_chip='$numero_chip'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_query($conn,$sql)){
        echo "<br><div class='alert alert-success' role='alert'>Adopción cancelada correctamente</div>";
    }else{
        echo "<br><div class='alert alert-danger' role='alert'>Error:".$sql."<br>".mysqli_error($conn)."</div>";
    }
}
 ?>
</div></div>
<a href="indexAdopciones.php" class="btn btn-primary">Volver al índice</a>
<?php include("footer.php"); ?>