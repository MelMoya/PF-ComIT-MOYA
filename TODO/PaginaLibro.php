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
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/stylePaginaLibro.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuCSesion2.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleFooter.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ProyectoFinal/TODO/styleMenuSSesion2.css">

</head>

<body>

	<div class="menu">
		<?php
		session_start();
		header("Content-Type: text/html;charset=utf-8");
    $_SESSION["iniciada"] = 0; //NO
			if ($_SESSION["iniciada"]==$_SESSION["sIniciada"]){
				include'menuSSesion.php';
			}
			else {
				require ("vinculacion.php");
				$id=$_SESSION['id_User'];
				include'menuCSesion.php';
			}
			//LIBRO
			$rIdLibro = $_GET['idLibro'];
			//Datos del Libros
			$consultaL="SELECT* FROM libro WHERE idLibro=$rIdLibro";
			$resultadoL=mysqli_query($conn,$consultaL);
			$valorL=mysqli_fetch_array($resultadoL);
			//Datos de Libro
			$LID="$valorL[idLibro]";
			$LTitulo="$valorL[titulo]";
			$LAnio="$valorL[anio]";
			$LSipnosis="$valorL[sipnosis]";
			$LFoto="$valorL[foto]";
			$LCalificacion="$valorL[calificacion]";
		?>
	</div>

	<div class="pagina">
		<div id="row">
			<div class="col-sm-4">
				<img src="http://localhost/ProyectoFinal/TODO/<?php echo "$LFoto"; ?>" alt="FotoPortada" id="FotoPortada">
			</div>
			<div class="col-sm-8" id="colInfo">
				<h5>
					<?php
		      $consultaGxL="SELECT * FROM generoPorLibro WHERE idLibro=$rIdLibro";
		      $resultadoGxL=mysqli_query($conn,$consultaGxL);
		      $cantResultGxL=mysqli_num_rows($resultadoGxL);
		      //Por cada Genero
		      for($rowG=1;$rowG<=$cantResultGxL;$rowG++){
		        $valorG=mysqli_fetch_array($resultadoGxL);
		        //Datos de idGenero
		        $GIdGenero="$valorG[idGenero]";

		        //Encuentro datos de Genero
		        $consultaG="SELECT * FROM genero WHERE idGenero=$GIdGenero";
		        $resultadoG=mysqli_query($conn,$consultaG);
		        $valorG=mysqli_fetch_array($resultadoG);
		        //Datos de Genero
						$GGenero="$valorG[genero]";
		        ?>
		        <a href="http://localhost/ProyectoFinal/TODO/Librosde.php/?idGenero=<?php echo($GIdGenero); ?>"><?php echo($GGenero); ?></a> |
		      <?php
		        }
		      ?>
				</h5>
				<h2><?php echo("$LTitulo"); ?></h2>
				<h5>de
					<?php
		        $consultaAxL="SELECT * FROM autores_por_Libro WHERE idLibro=$rIdLibro";
		        $resultadoAxL=mysqli_query($conn,$consultaAxL);
		        $cantResultAxL=mysqli_num_rows($resultadoAxL);
		        //Por cada Autor
		        for($rowA=1;$rowA<=$cantResultAxL;$rowA++){
		          $valorAxL=mysqli_fetch_array($resultadoAxL);
		          //Datos de idAutor
		          $AIdAutor="$valorAxL[idAutor]";
		          //Encuentro datos de Autor
		          $consultaA="SELECT * FROM autor WHERE idAutor=$AIdAutor";
		          $resultadoA=mysqli_query($conn,$consultaA);
		          $valorA=mysqli_fetch_array($resultadoA);
		          $ANombre="$valorA[nombreAutor]";
		          $AApellido="$valorA[apellidoAutor]";
		          ?>
		          <a href="http://localhost/ProyectoFinal/TODO/LibrosdeAutor.php/?idAutor=<?php echo($AIdAutor); ?>"><?php echo($ANombre." ".$AApellido ); ?></a> |
		        <?php
		          }
		        ?>
				</h5>
				<h5>Calificacion: <?php echo "$LCalificacion"; ?> |
					<?php
		      $consultaCantR="SELECT * FROM resenia WHERE idLibro=$rIdLibro";
		      $resultadoCantR=mysqli_query($conn,$consultaCantR);
		      $cantR=mysqli_num_rows($resultadoCantR);

					$consultaR="SELECT * FROM resenia WHERE idLibro=$rIdLibro";
					$resultadoR=mysqli_query($conn,$consultaR);
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
					//Imprimo cantidad
		      echo $cantR;
		      ?> reseñas </h5>
					<form>
						<select id="selectbasic" name="selectbasic" class="form-control">
							<option value="1" <?php if ($rEstado=="1") echo "selected"; ?>>Leido</option>
							<option value="2" <?php if ($rEstado=="2") echo "selected"; ?>>Leyendo</option>
							<option value="3" <?php if ($rEstado=="3") echo "selected"; ?>>Quiero Leer</option>
							<option value="4" <?php if ($rEstado=="4") echo "selected"; ?>>Abandonado</option>
						</select>

						<p class="clasificacion" id="estrellas">
						<input id="radio1" type="radio" name="estrellas" value="5" <?php if ($rValoracion=="5") echo "checked"; ?>>
					<label for="radio1">★</label>
					<input id="radio2" type="radio" name="estrellas" value="4" <?php if ($rValoracion=="4") echo "checked"; ?>>
					<label for="radio2">★</label>
					<input id="radio3" type="radio" name="estrellas" value="3" <?php if ($rValoracion=="3") echo "checked"; ?>>
					<label for="radio3">★</label>
					<input id="radio4" type="radio" name="estrellas" value="2" <?php if ($rValoracion=="2") echo "checked"; ?>>
					<label for="radio4">★</label>
					<input id="radio5" type="radio" name="estrellas" value="1" <?php if ($rValoracion=="1") echo "checked"; ?>>
					<label for="radio5">★</label>
						</p>
					</form>
				<br>
				<p> <?php echo $LSipnosis; ?></p>
				<br>
				<div class="cSesion">
					<h4>Escribir Reseña:</h4>
					<div class="row" id="rowReseña">
						<div class="col-sm-1">
							<img src="http://localhost/ProyectoFinal/TODO/<?php echo "$_SESSION[foto_User]"; ?>" alt="fotoUsuario" id="fotoUsuario" class="img-circle">
						</div>
						<div class="col-sm-5" id="txtResenia">
							<?php
								$consultaRxU="SELECT * FROM resenia WHERE idLibro=$rIdLibro AND idUsuario=$id";
								$resultadoRxU=mysqli_query($conn,$consultaRxU);
								if($cantR>0){
									//Encuentro datos de Resenia
									$valorRxU=mysqli_fetch_array($resultadoRxU);
									$reseniaXU="$valorRxU[resenia]";
								}
								else {
									$reseniaXU="";
								}
							?>

							<form class="" action='http://localhost/ProyectoFinal/TODO/cargarResenia.php/?idLibro=<?php echo "$LID"; ?>' method="post">
								<textarea class="form-control" id="textarea" name="textarea" id="resenia" ><?php echo "$reseniaXU"; ?></textarea>
								<button id="singlebutton" name="singlebutton" class="btn btn-primary">Publicar</button>
								<!-- Textarea -->
							</form>
						</div>
					</div>
				</div>
				<div class="ReseniasGuardadas">
					<?php
					//Encuento resenias de un mismo usuario
					$consultaR="SELECT * FROM resenia WHERE idLibro=$rIdLibro";
					$resultadoR=mysqli_query($conn,$consultaR);
					//Encuentro datos de Resenia
					$cantR=mysqli_num_rows($resultadoCantR);
					  if($cantR > 0){
			        //Por cada resenia
			        for($rowR=1;$rowR<=$cantR;$rowR++){
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

								//Datos del usuario que escribio la reseña
								$consultaU="SELECT nombreUsuario,foto FROM usuario WHERE idUsuario=$rIdUsuario";
								$resultadoU=mysqli_query($conn,$consultaU);
								$datosU=mysqli_fetch_array($resultadoU);
								$nombreU="$datosU[nombreUsuario]";
								$fotoU="$datosU[foto]";
							?>
								<div class="row" id="rowReseña">
									<div class="col-sm-2">
										<img src= "http://localhost/ProyectoFinal/TODO/<?php echo "$fotoU"; ?>" alt="fotoUsuario" id="fotoUsuario" class="img-circle">
										<br>
										<a ><?php echo "$nombreU"; ?></a>
									</div>
									<div class="col-sm-1">

									</div>
									<div class="col-sm-5" id="txtResenia">
										<p><?php echo "$rResenia"; ?></p>
									</div>
									<br>
								</div>
								<br>
							<?php
						}  //Fin for
						} //Fin if
						else {
							echo "<h3 align='center'> No hay Reseñas </h3>";
						}
					?>
				</div>
			</div> <!-- fin ColInfo-->
		</div>
	</div><!--Fin .pagina -->
	<div class="footer" id="footer"><?php include 'footer.php';?></div>
</body>
</html>
