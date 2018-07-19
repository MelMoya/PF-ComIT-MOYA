<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleBiblioteca.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuCSesion2.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/stylePerfilUsuario.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleFooter.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuPerfil.css">
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
          header("location: http://localhost/ProyectoFinal/TODO/biblioteca.php");
        }
        else {
          include 'menuPerfilUsuario.php';
        }
			}
		?>
	</div>
	<div class="perfilUsuario">
    <div class="row">
			<div class="col-sm-12">
        <nav>
					<br>
					<ul class="nav navbar-nav" id="navbar">
              <li><a href="http://localhost/ProyectoFinal/TODO/leidos.php?idUsuario=<?php echo "$id"; ?>" selected>Leidos</a></li>
              <li><a href="http://localhost/ProyectoFinal/TODO/leyendo.php?idUsuario=<?php echo "$id"; ?>">Leyendo</a></li>
              <li><a href="http://localhost/ProyectoFinal/TODO/qLeer.php?idUsuario=<?php echo "$id"; ?>">Quiero Leer</a></li>
              <li><a href="http://localhost/ProyectoFinal/TODO/abandonados.php?idUsuario=<?php echo "$id"; ?>">Abandonado</a></li>
							<li><a href="#">Gustos</a></li>
            </ul>
        </nav>
			</div>
    </div>
    <div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<?php
        $idUsuario=$_GET['idUsuario'];
				//Encuento resenias del usuario
				$consultaR="SELECT * FROM resenia WHERE idUsuario=$idUsuario";
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
					echo "<h3 id='center';> No hay Libros </h3>";
				}
				?>
			</div>
			<div class="col-sm-1"></div>
		</div><!--Fin row-->
  </div><!--Fin .biblioteca-->
	<div class="footer"><?php include 'footer.php';?></div>
</body>
</html>
