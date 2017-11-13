<h1><i class="glyphicon glyphicon-list"></i> Lista de Proximas Revisiones</h1>
<div class="row">
<div class="col-md-8">
<?php
$sql = "SELECT * FROM Ficha_veterinaria WHERE
	fecha_proxima_revision BETWEEN 
		SUBDATE(SYSDATE(), INTERVAL 1 MONTH)
		AND 
		SYSDATE()";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<br><table class='table pasadas'>";
	echo '<caption align="top"><h3>Revisiones pasadas de fecha (1 mes)</h3></caption>';
	echo "<thead><tr>
						 <th>Numero de Chip</td>
						 <th>Fecha de próxima revisión</th>
						 <th>Vacunas</th>
						 </thead><tbody>";
	while($row = mysqli_fetch_assoc($result)) {
		echo"
			<tr><td>".$row["numero_chip"]."</td>
			<td>".$row["fecha_proxima_revision"]."</td>
			<td>".$row["lista_vacunas"]."</td></tr>";
	}
	echo "</tbody></table>";
}else{
			echo "<br><div class='alert alert-info' role='alert'>No hay revisiones pasadas de fecha</div>";
}
/////////////////////////////////////////////////////
$sql = "SELECT * FROM Ficha_veterinaria WHERE
	fecha_proxima_revision BETWEEN 
		SYSDATE()
		AND 
		ADDDATE(SYSDATE(), INTERVAL 1 WEEK)";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<br><table class='table proxima_semana'>";
	echo '<caption align="top"><h3>¡Revisiones de la próxima semana!</h3></caption>';
	echo "<thead><tr>
						 <th>Numero de Chip</td>
						 <th>Fecha de próxima revisión</th>
						 <th>Vacunas</th>
						 </thead><tbody>";
	while($row = mysqli_fetch_assoc($result)) {
		echo"
			<tr><td>".$row["numero_chip"]."</td>
			<td>".$row["fecha_proxima_revision"]."</td>
			<td>".$row["lista_vacunas"]."</td></tr>";
	}
	echo "</tbody></table>";
}else{
			echo "<br><div class='alert alert-info' role='alert'>No hay revisiones en la próxima semana</div>";
}

$sql = "SELECT * FROM Ficha_veterinaria WHERE
	fecha_proxima_revision BETWEEN 
		ADDDATE(SYSDATE(), INTERVAL 1 WEEK)
		AND 
		ADDDATE(SYSDATE(), INTERVAL 4 WEEK)";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

	echo "<br><table class='table proximo_mes'>";
	echo '<caption align="top"><h3>Revisiones del próximo mes</h3></caption>';
	echo "<thead><tr>
						 <th>Numero de Chip</td>
						 <th>Fecha de próxima revisión</th>
						 <th>Vacunas</th>
						 </thead><tbody>";
	while($row = mysqli_fetch_assoc($result)) {
		echo"
			<tr><td>".$row["numero_chip"]."</td>
			<td>".$row["fecha_proxima_revision"]."</td>
			<td>".$row["lista_vacunas"]."</td></tr>";
	}
	echo "</tbody></table>";
}else{
			echo "<br><div class='alert alert-info' role='alert'>No hay revisiones en el próximo mes</div>";
}

 ?>
</div></div>