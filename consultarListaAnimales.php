<h1><i class="glyphicon glyphicon-list"></i> Lista de animales</h1>
<div class="row">
<div class="col-md-8">
<?php
$sql = "SELECT * FROM Animal";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<br><table class='table'>";
	echo "<thead><tr>
						 <th>Numero de Chip</td>
						 <th>Nombre del perro</th>
						 <th>Fecha de ingreso</th>
						 </thead><tbody>";
	while($row = mysqli_fetch_assoc($result)) {
		echo"
			<tr><td>".$row["numero_chip"]."</td>
			<td>".$row["nombre_animal"]."</td>
			<td>".$row["fecha_ingreso"]."</td></tr>";
	}
	echo "</tbody></table>";
}else{
			echo "<br><div class='alert alert-danger' role='alert'>No hay resultados</div>";
}
 ?>
</div></div>