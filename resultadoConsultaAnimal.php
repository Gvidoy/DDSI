<?php include ("header.php"); ?>
<?php include ("consultarAnimal.php"); ?>
<div class="row">
<div class="col-md-8">
<?php

if(isset($_POST['Consultar'])){

	$numero_chip = $_POST['numero_chip'];

	$sql = "SELECT * FROM Animal WHERE numero_chip='$numero_chip'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
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
	}else{
				echo "<br><div class='alert alert-danger' role='alert'>No hay resultados</div>";
	}

}
 ?>
</div></div>
<a href="indexAnimal.php" class="btn btn-primary">Volver al índice</a>
<?php include("footer.php"); ?>