<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ERROR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    session_start();
    session_unset();
    session_destroy();
  ?>
		<div class="alert alert-success alert-dismissible fade in">
	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<h3><strong>SE CERRO SESION!</strong></h3> <br>
 		 		REDIRECCIONANDO
 		 <?php session_start(); $_SESSION["sIniciada"]=0; //NO?>

		 <script>setInterval('location="inicioSSesion.php"',2000);</script>
	  </div>
</body>
</html>
