
<?php
session_start();
$_SESSION["chip"] = $_POST["numero_chip"];

?>

<div class="formularios">
    <h3><i class="glyphicon glyphicon-pencil"></i>Crear Ficha</h3>
    <div class="col-md-5">
<form action="resultadoFormularioFicha.php" method="post">
  <div class="form-group">
    <label for="fecha_proxima_revision">Fecha de la próxima revisión</label>
    <input type="text" class="form-control" name="fecha_proxima_revision" placeholder="aaaa/mm/dd">
  </div>
  <div class="form-group">
    <label for="lista_vacunas">Lista de vacunas</label>
    <input type="text" class="form-control input-lg" name="lista_vacunas" placeholder="Observaciones del veterinario...">
  </div>
  <input type="submit" class="btn btn-primary" name="Insertar">
</form>
</div>
</div>
