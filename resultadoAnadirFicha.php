<?php include ("header.php"); ?>
<?php include ("anadirFicha.php"); ?>
<div class="row">
<div class="col-md-8">
<?php

if(isset($_POST['Consultar'])){

	$numero_chip = $_POST['numero_chip'];
	
	



	$sql = "SELECT * FROM Animal WHERE numero_chip='$numero_chip'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		echo "<br><table class='table'>";
		echo "<thead><tr>
							 <th>Numero de Chip</td>
							 <th>Nombre del perro</th>
							 <th>Fecha de ingreso</th>
							 </thead><tbody>
							 <tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo"
				<td>".$row["numero_chip"]."</td>
				<td>".$row["nombre_animal"]."</td>
				<td>".$row["fecha_ingreso"]."</td>";
		}
		echo "</tr></tbody></table>";
		
			
	$sql2 = "SELECT * FROM Ficha_veterinaria WHERE numero_chip='$numero_chip'";
	$result2 = mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result2) > 0) {
		// output data of each row
		echo "<br><table class='table'>";
		echo "<thead><tr>
							 <th>fecha de proxima revisión</th>
							 <th>Observaciones</th>
							 </thead><tbody>
							 <tr>";
		while($row = mysqli_fetch_assoc($result2)) {
			echo"
				<td>".$row["fecha_proxima_revision"]."</td>
				<td>".$row["lista_vacunas"]."</td>";
		}
		echo "</tr></tbody></table>";
		
		include ("modificarFormularioFicha.php");
	}else{
				echo "<br><div class='alert alert-danger' role='alert'>Este perro no tiene ficha veterinaria</div>";
				include ("formularioFicha.php");
	}
		
		
	}else{
				echo "<br><div class='alert alert-danger' role='alert'>No hay resultados</div>";
	}
	

	

}
 ?>
</div></div>

<a href="indexVeterinario.php" class="btn btn-primary">Volver al índice</a>
<?php include("footer.php"); ?>