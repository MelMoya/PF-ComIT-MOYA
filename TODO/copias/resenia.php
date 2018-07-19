<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styleresenia2.css">
	<link rel="stylesheet" type="text/css" href="styleMenuCSesion2.css">
	<link rel="stylesheet" type="text/css" href="styleMenuPerfil.css">
  <link rel="stylesheet" type="text/css" href="styleFooter.css">

  <script>
  function inicio(){
    $("textarea").hide();
    $("#guardar").hide();
  }
  function btEditar() {
    $("#reseniaP").hide()
    $("#textareaResenia").show();
    $("#guardar").show();
    $("#editarBt").hide();
  }
  function btGuardar() {
    $("#reseniaP").show()
    $("#textareaResenia").hide();
    $("#guardar").hide();
    $("#editarBt").show();
  }

</script>

</head>
<body onload="inicio()">
  <div class="menu">
    <?php
		session_start();
		$_SESSION["iniciada"] = 0; //NO
			if ($_SESSION["iniciada"]==$_SESSION["sIniciada"]){
				header("location: necesitaSession.php");
			}
			else {
        require ("vinculacion.php");
				$id=$_SESSION['id_User'];
				include'menuCSesion.php';
        include'menuPerfil.php';
			}
		?>
  </div>
  <div class="resenia">

      <?php
      //Encuento resenias de un mismo usuario
      $consultaR="SELECT * FROM resenia WHERE idUsuario=$id";
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

          include 'infoResenia.php';

          echo "<br>";
        }
      }
      else {
        echo "<h3 align='center'> No hay Reseñas </h3>";
      }
      ?>



  </div> <!-- Fin Resenia-->
  <div class="footer"> <?php include 'footer.php' ?> </div>
</body>
</html>
