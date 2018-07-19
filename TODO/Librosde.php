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
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleBiblioteca.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleInicioCSesion.css">
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
				require ("vinculacion.php");
				$id=$_SESSION['id_User'];
				include'menuCSesion.php';
				$datoG=$_GET['idGenero'];
			}
		?>
	</div>
	<div class="inicioCSesion">
		<div class="row">
			<div class="col-sm-3" >
				<br>
				<div class="row" id="rowPerfilInfo">
					<div class="col-md-3"></div>
					<div class="col-md-5" id="colPerfilInfo">
						<br>
						<img id="img1" src="/imagenes/fotoPerfil/<?php echo $_SESSION['foto_User']; ?>" alt="fotoUsuario" class="img-circle">
						<br>
						<strong><a href="http://localhost/ProyectoFinal/TODO/biblioteca.php"><?php echo "$_SESSION[nick_User]" ?></a></strong>
						<br>
						<div class="btn-group-vertical">
              <a href="http://localhost/ProyectoFinal/TODO/resenia.php?idUsuario=<?php echo "$id"; ?>" class="btn btn-primary">Reseñas <br>
                <?php
                  $consulta="SELECT * FROM resenia WHERE idUsuario=$id";
                  $resultado=mysqli_query($conn,$consulta);
                  $cantResult=mysqli_num_rows($resultado);
                  echo $cantResult;
                ?>
              </a>
              <a href="http://localhost/ProyectoFinal/TODO/seguidores.php?idUsuario=<?php echo "$id"; ?>" class="btn btn-primary">Seguidores <br>
                <?php
                  $consulta="SELECT * FROM seguimiento WHERE idUsuarioSeguido=$id";
                  $resultado=mysqli_query($conn,$consulta);
                  $cantResult=mysqli_num_rows($resultado);
                  echo $cantResult;
                ?>
              </a>
              <a href="http://localhost/ProyectoFinal/TODO/seguidos.php?idUsuario=<?php echo "$id"; ?>" class="btn btn-primary">Seguidos <br>
                <?php
                  $consulta="SELECT * FROM seguimiento WHERE idUsuario=$id";
                  $resultado=mysqli_query($conn,$consulta);
                  $cantResult=mysqli_num_rows($resultado);
                  echo $cantResult;
                ?>
              </a>
							<br>
            </div>
					</div>
					<div class="col-md-4"></div>

				</div> <!--fin rowPerfilInfo-->
			</div> <!-- Fin col 3 -->
		<div class="col-sm-7" id="colLibros">

			<div class="libros">
				<div class="col-sm-6">
					<div class="Nombre">
						<?php
							//Nombre de genero
							$consultaNombre="SELECT genero FROM genero WHERE idGenero=$datoG";
							$resultadoNombre=mysqli_query($conn,$consultaNombre);
							$arrayNombre=mysqli_fetch_array($resultadoNombre);
							$NombreGenero=$arrayNombre['genero'];
						?>
						<h3 id="nombreG" size="4"><?php echo $NombreGenero; ?><h3> <br>
					</div>
				</div>

				<?php

						//Encuentro todos los Libros
						$consulta="SELECT idLibro FROM generoporlibro where idGenero=$datoG";
						$resultado=mysqli_query($conn,$consulta);
						$cantidad=mysqli_num_rows($resultado);

						while ($array = mysqli_fetch_array($resultado)){
							$rIdLibro=$array['idLibro'];

							//Por ese genero, encuentro datos de Libro
		          $consultaL="SELECT* FROM libro WHERE idLibro=$rIdLibro";
		          $resultadoL=mysqli_query($conn,$consultaL);
		          $valorL=mysqli_fetch_array($resultadoL);
		          //Datos de Libro
		          $LTitulo="$valorL[titulo]";
		          $LAnio="$valorL[anio]";
		          $LISipnosis="$valorL[sipnosis]";
		          $LFoto="$valorL[foto]";
		          $LCalificacion="$valorL[calificacion]";

							$consultaR="SELECT * FROM resenia WHERE idUsuario=$id AND idLibro=$rIdLibro";
							$resultadoR=mysqli_query($conn,$consultaR);
							$valorR=mysqli_fetch_array($resultadoR);
							$rValoracion="$valorR[valoracion]";
							$rEstado="$valorR[estado]";

							include 'biblioteca2.php';

							echo "<br>";
					}
				?>
			</div>
			<br>
		</div> <!-- Fin colLibros -->
		<div class="col-sm-2" id="fotosCarrousel">
			<br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>

					<?php
					//Foto1
						$consultaCant="SELECT * FROM libro ORDER BY RAND() LIMIT 1";
						$resultadoL=mysqli_query($conn,$consultaCant);
						$cant=mysqli_num_rows($resultadoL);

						while ($array = mysqli_fetch_assoc($resultadoL)){
								//Foto del Libro
								$LFoto="$array[foto]";
								$Lid="$array[idLibro]";
						}
					?>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<a href="http://localhost/ProyectoFinal/TODO/PaginaLibro.php/?idLibro=<?php echo($Lid); ?>"><img src="http://localhost/ProyectoFinal/TODO/<?php echo "$LFoto"; ?>"></a>
						</div>

						<?php
						//Foto2
							$consultaCant="SELECT * FROM libro ORDER BY RAND() LIMIT 1";
							$resultadoL=mysqli_query($conn,$consultaCant);
							$cant=mysqli_num_rows($resultadoL);

							while ($array = mysqli_fetch_assoc($resultadoL)){
									//Foto del Libro
									$LFoto="$array[foto]";
									$Lid="$array[idLibro]";
							}
						?>
						<div class="item">
							<a href="http://localhost/ProyectoFinal/TODO/PaginaLibro.php/?idLibro=<?php echo($Lid); ?>"><img src="http://localhost/ProyectoFinal/TODO/<?php echo "$LFoto"; ?>"></a>
						</div>

						<?php
						//Foto3
							$consultaCant="SELECT * FROM libro ORDER BY RAND() LIMIT 1";
							$resultadoL=mysqli_query($conn,$consultaCant);
							$cant=mysqli_num_rows($resultadoL);

							while ($array = mysqli_fetch_assoc($resultadoL)){
									//Foto del Libro
									$LFoto="$array[foto]";
									$Lid="$array[idLibro]";
							}
						?>
						<div class="item">
							<a href="http://localhost/ProyectoFinal/TODO/PaginaLibro.php/?idLibro=<?php echo($Lid); ?>"><img src="http://localhost/ProyectoFinal/TODO/<?php echo "$LFoto"; ?>"></a>
						</div>

						<?php
						//Foto4
							$consultaCant="SELECT * FROM libro ORDER BY RAND() LIMIT 1";
							$resultadoL=mysqli_query($conn,$consultaCant);
							$cant=mysqli_num_rows($resultadoL);

							while ($array = mysqli_fetch_assoc($resultadoL)){
									//Foto del Libro
									$LFoto="$array[foto]";
									$Lid="$array[idLibro]";
							}
						?>
					<div class="item">
						<a href="http://localhost/ProyectoFinal/TODO/PaginaLibro.php/?idLibro=<?php echo($Lid); ?>"><img src="http://localhost/ProyectoFinal/TODO/<?php echo "$LFoto"; ?>"></a>
					</div>

						<?php
						//Foto5
							$consultaCant="SELECT * FROM libro ORDER BY RAND() LIMIT 1";
							$resultadoL=mysqli_query($conn,$consultaCant);
							$cant=mysqli_num_rows($resultadoL);

							while ($array = mysqli_fetch_assoc($resultadoL)){
									//Foto del Libro
									$LFoto="$array[foto]";
									$Lid="$array[idLibro]";
							}
						?>
					<div class="item">
						<a href="http://localhost/ProyectoFinal/TODO/PaginaLibro.php/?idLibro=<?php echo($Lid); ?>"><img src="http://localhost/ProyectoFinal/TODO/<?php echo "$LFoto"; ?>"></a>
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
			</div>
		</div> <!-- Fin fotosCarrousel-->
	</div> <!-- Fin .row -->
</div><!-- Fin .inicioCSesion -->
<br>
	<div class="footer" id="footer"> <?php include 'footer.php'?> </div>
</body>
</html>
