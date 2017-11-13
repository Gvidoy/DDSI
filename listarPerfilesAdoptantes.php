<h1><i class="glyphicon glyphicon-user"></i> Lista de adoptantes</h1>
<div class="row">
<div class="col-md-8">
<?php
$sql = "SELECT DISTINCT dni_adoptante FROM Adopcion";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<br><table class='table'>";
		echo "<thead><tr>
							 <th>DNI del adoptante: ".$row["dni_adoptante"]."</td>
							 </thead><tbody>";
		$dni_encontrado = $row['dni_adoptante'];
		$sql2 = "SELECT numero_chip FROM Adopcion WHERE dni_adoptante='$dni_encontrado'";
		$result2 = mysqli_query($conn, $sql2);
		while($row2 = mysqli_fetch_assoc($result2)) {
			echo"
				<tr><td>Nº_Chip: ".$row2["numero_chip"]."</td></tr>";
		}
	}
	echo "</tbody></table>";
}else{
			echo "<br><div class='alert alert-danger' role='alert'>No hay resultados</div>";
}
 ?>
</div></div>