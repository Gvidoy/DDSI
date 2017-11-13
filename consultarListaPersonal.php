<h1><i class="glyphicon glyphicon-list"></i> Lista de Personal</h1>
<div class="row">
<div class="col-md-8">
<?php
$sql = "SELECT * FROM Personal";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<br><table class='table'>";
	echo "<thead><tr>
						 <th>Nombre</th>
						 <th>DNI</th>
						 <th>Puesto de trabajo</th>
						 <th>E-MAIL</th>
						 <th>Salario</th>
						 <th>Vacaciones</th>
						 </thead><tbody>";
	while($row = mysqli_fetch_assoc($result)) {
		echo"
			<tr><td>".$row["nombre"]."</td>
			<td>".$row["dni"]."</td>
			<td>".$row["puesto_trabajo"]."</td>
			<td>".$row["correo"]."</td>
			<td>".$row["salario"]."</td>
			<td>".$row["vacaciones"]."</td>
			</tr>";
	}
	echo "</tbody></table>";
}else{
			echo "<br><div class='alert alert-danger' role='alert'>No hay resultados</div>";
}
 ?>
</div></div>