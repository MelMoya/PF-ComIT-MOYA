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

    <div class="alert alert-warning alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h3><strong>Ya hay sesion iniciada</strong></h3> <br>
    Necesita cerrar sesion para ingresar con otra cuenta
    <br>
    REDIRECCIONANDO
  </div>
  echo"<script>setInterval('javascript:history.back(1)',3000);</script>";
</body>
</html>
