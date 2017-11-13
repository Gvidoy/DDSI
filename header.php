<?php include ("./conexionDB.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DaleVida</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/template.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
		   	<a class="navbar-brand" href="./index.php"><i class="glyphicon glyphicon-eye-open"></i>    Dale Vida</a>
			<a class="navbar-brand nav nav-tabs" href="./indexAnimal.php"><i class="glyphicon glyphicon-heart-empty"></i> Animales</a>
			<a class="navbar-brand nav nav-tabs" href="./indexPersonal.php"><i class="glyphicon glyphicon-briefcase"></i> Personal</a>
			<a class="navbar-brand nav nav-tabs" href="./indexAdopciones.php"><i class="glyphicon glyphicon-random"></i> Adopciones</a>
			<a class="navbar-brand nav nav-tabs" href="./indexVeterinario.php"><i class="glyphicon glyphicon-plus"></i> Veterinario</a>
		</div>
	</div>
</nav>
<a class="btn btn-danger navigation fix" id="fix" href="./alertas.php"><i class="glyphicon glyphicon-envelope"></i> Alertas</a>
<div class="container main">