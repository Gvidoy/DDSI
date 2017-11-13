<?php include ("header.php"); ?>
<div class="row">
<div class="col-md-8">
<?php

if(isset($_POST['Consultar'])){

	$dni = $_POST['dni'];
	$salario = $_POST['salario'];

	$sql = "SELECT * FROM Personal WHERE dni='$dni'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		
	$sql = "UPDATE Personal SET salario = '$salario' where dni = '$dni'";

    if(mysqli_query($conn,$sql)){
        echo "<br><div class='alert alert-success' role='alert'>Salario añadido correctamente</div>";
    }else{
        echo "<br><div class='alert alert-danger' role='alert'>Error:".$sql."<br>".mysqli_error($conn)."</div>";
    }
    mysqli_close($conn);

	}else{
				echo "<br><div class='alert alert-danger' role='alert'>No existe personal con ese dni</div>";
			
	}
		

	

}
 ?>
</div></div>

<a href="indexPersonal.php" class="btn btn-primary">Volver al índice</a>
<?php include("footer.php"); ?>