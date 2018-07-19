<!-- A QUIEN ME SIGUE-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleSeguidor2.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuCSesion2.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuPerfil.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleFooter.css">
</head>

<body>
  <div class="menu">
    <?php
		session_start();
    $id=$_GET['idUsuario'];
		$_SESSION["iniciada"] = 0; //NO
			if ($_SESSION["iniciada"]==$_SESSION["sIniciada"]){
				header("location: necesitaSession.php");
			}
			else {
        include'menuCSesion.php';
        if ($id==$_SESSION['id_User']){
          include'menuPerfil.php';
        }
        else {
          include 'menuPerfilUsuario.php';
        }
			}
		?>
  </div>
	<div class="bodySeguidores">
	    <div class="row" id="rBody">
	      <div class="col-sm-2"></div>
	      <div class="col-sm-8">
	        <div class="titulo" id="tituloSeguidos">
	          <h2>Sigo a <?php
              $consulta="SELECT idUsuarioSeguido FROM seguimiento WHERE idUsuario=$id";
              $resultado=mysqli_query($conn,$consulta);
              $cantResult=mysqli_num_rows($resultado);
              echo $cantResult;
            ?>  lectores</h2>
	        </div>
	        <div class="usuario">
	          <div class="cuadrado">
							<?php
                for($row=1;$row<=$cantResult;$row++){
                  $valor=mysqli_fetch_array($resultado);
                  $idSeguido="$valor[idUsuarioSeguido]";
                  $consulta1="SELECT nombreUsuario,foto FROM usuario WHERE idUsuario=$idSeguido";
                  $resultado1=mysqli_query($conn,$consulta1);
                  $valor1=mysqli_fetch_array($resultado1);
                  $Nombre="$valor1[nombreUsuario]";
                  $fotoUsuario="$valor1[foto]";
                  include 'sigo.php';
                }
              ?>
	         	</div>
					</div>
				</div>
 				<div class="col-sm-2"></div>
	    </div>
	</div>
  <div class="footer"><?php include 'footer.php' ?></div>
</body>
</html>
