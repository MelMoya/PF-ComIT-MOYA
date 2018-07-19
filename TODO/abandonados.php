<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styleBiblioteca.css">
	<link rel="stylesheet" type="text/css" href="styleMenuCSesion2.css">
	<link rel="stylesheet" type="text/css" href="styleMenuPerfil.css">
	<link rel="stylesheet" type="text/css" href="styleFooter.css">
</head>
<body>
	<div class="menu">
		<?php
		session_start();
		$_SESSION["iniciada"] = 0; //NO
			if ($_SESSION["iniciada"]==$_SESSION["sIniciada"]){
				header("location: necesitaSession.php");
			}
			else {
				require ("vinculacion.php");
				include'menuCSesion.php';
        $id=$_GET['idUsuario'];
        if ($id===$_SESSION['id_User']){
          include'menuPerfil.php';
        }
        else {
          include 'menuPerfilUsuario.php';
        }
			}
		?>
	</div>
	<div class="biblioteca">
    <div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
        <nav>
					<ul class="nav navbar-nav" id="navbar">
              <li><a href="http://localhost/ProyectoFinal/TODO/leidos.php?idUsuario=<?php echo "$id"; ?>" selected>Leidos</a></li>
              <li><a href="http://localhost/ProyectoFinal/TODO/leyendo.php?idUsuario=<?php echo "$id"; ?>">Leyendo</a></li>
              <li><a href="http://localhost/ProyectoFinal/TODO/qLeer.php?idUsuario=<?php echo "$id"; ?>">Quiero Leer</a></li>
              <li><a href="http://localhost/ProyectoFinal/TODO/abandonados.php?idUsuario=<?php echo "$id"; ?>">Abandonado</a></li>
							<li><a href="#">Gustos</a></li>
            </ul>
        </nav>
				<strong><h3>Libros Abandonados</h3></strong>
			</div>
			<div class="col-sm-2"></div>
    </div>
    <div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<?php
				//Encuento resenias de un mismo usuario
				$consultaR="SELECT * FROM resenia WHERE idUsuario=$id AND estado=4";
					$resultadoR=mysqli_query($conn,$consultaR);
					$cantResultR=mysqli_num_rows($resultadoR);
					if($cantResultR>0){
					//Por cada resenia
					for($rowR=1;$rowR<=$cantResultR;$rowR++){
						//Encuentro datos de Resenia
						$valorR=mysqli_fetch_array($resultadoR);
						//Datos de resenia
						$rIdResenia="$valorR[idResenia]";
						$rIdUsuario="$valorR[idUsuario]";
						$rIdLibro="$valorR[idLibro]";
						$rResenia="$valorR[resenia]";
						$rFecha="$valorR[fecha]";
						$rValoracion="$valorR[valoracion]";
						$rEstado="$valorR[estado]";

						//Por esa resenia, encuentro datos de Libro
						$consultaL="SELECT* FROM libro WHERE idLibro=$rIdLibro";
						$resultadoL=mysqli_query($conn,$consultaL);
						$valorL=mysqli_fetch_array($resultadoL);
						//Datos de Libro
						$LTitulo="$valorL[titulo]";
						$LAnio="$valorL[anio]";
						$LISipnosis="$valorL[sipnosis]";
						$LFoto="$valorL[foto]";
						$LCalificacion="$valorL[calificacion]";

						include 'biblioteca2.php';
					}
				}
				else {
					echo "<h3 align='center'> No hay Libros </h3>";
				}
				?>
			</div>
			<div class="col-sm-1"></div>
		</div><!--Fin row-->
  </div><!--Fin .biblioteca-->
	<div class="footer"><?php include 'footer.php';?></div>
</body>
</html>
