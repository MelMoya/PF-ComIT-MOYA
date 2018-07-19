<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleInicioSSesion2.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuSSesion2.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleFooter.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuCSesion2.css">
</head>
<body>
	<div id="menu">
		<?php
		session_start();
    $_SESSION["iniciada"] = 0; //NO
			if ($_SESSION["iniciada"]==$_SESSION["sIniciada"]){
				include'menuSSesion.php';
			}
			else {
				include'menuCSesion.php';
			}
		?>
	</div>
	<div class="inicioSSesion">
		<div class="row" id="rowInicio">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"></div>
			<div class="col-sm-4" id="formulario">
				<h1>REGISTRARSE</h1>
				<form action="registro.php" method="post">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Contraseña:</label>
				      <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pswd1">
				    </div>
				    <div class="form-group">
				      <input type="password" class="form-control" id="pwd2" placeholder="Confirmar contraseña" name="pswd2">
				    </div>
				    <button type="submit" class="btn btn-primary" name="crear">Crear Cuenta</button>
				  </form>
					<br>
			</div>
			<!-- Fin #formulario -->
		</div> <!--Fin rowInicio-->
		<br>
	</div><!-- Fin .inicioSSesion -->

	<div class="footer" id="footer"> <?php include 'footer.php'?> </div>
</body>
</html>
