<?php
  require ("vinculacion.php");
  $miId=$_SESSION['id_User'];
  $idUsuario=$_GET['idUsuario'];
  $consultaOtroU="SELECT * FROM usuario WHERE idUsuario=$idUsuario";
  $resultadoOtroU=mysqli_query($conn,$consultaOtroU);
  $valorOtroU=mysqli_fetch_array($resultadoOtroU);
  $nickUsuario="$valorOtroU[nombreUsuario]";
  $nombreCompUsuario="$valorOtroU[nombreYApellido]";
  $descripcionUsuario="$valorOtroU[descripcion]";
  $fotoUsuario="$valorOtroU[foto]";
  $facebookUsuario="$valorOtroU[facebook]";
  $twitterUsuario="$valorOtroU[twitter]";
  $instagramUsuario="$valorOtroU[instagram]";
?>
<script>
$(document).ready(function(){

  $("#btnSiguiendo").onclick(function(){
    alert("hiciste click en Siguiendo");
    function dejaSeguir() {
      <?  php
      $sSQL= "DELETE FROM seguimiento WHERE idUsuario=$id AND idUsuarioSeguido=$idSeguido";
      mysqli_query($conn,$sSQL);
      header("Refresh:0");
      ?>
      //$("#editarBt").hide();
    }
  });

  $("#btnSeguir").onclick(function(){
    alert("hiciste click en Seguir");
    function Seguir() {
      <?  php
      $ssql="INSERT INTO seguimiento (idUsuario, idUsuarioSeguido) VALUES ('$id', '$idSeguido')";
      mysqli_query($conn,$sSQL);
      header('seguidos.php');
      header("Refresh:0");
      ?>
      //$("#editarBt").hide();
    }
  });
});
</script>
    <div class="perfil">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2" id="foto">
          <img src="http://localhost/ProyectoFinal/TODO/<?php echo "$fotoUsuario"; ?>" alt="fotoUsuario" class="img-circle">
        </div>
        <div class="col-sm-4">
          <h2><?php echo "$nickUsuario"; ?></h2>
          <h5><?php echo "$nombreCompUsuario"; ?></h5>
          <h2><?php echo "$descripcionUsuario"; ?></h2>
        </div>
        <div class="col-sm-4" id="botones"> <!--Col sm-4-->
          <div class="row" id="rowMenu">
            <div class="btn-group btn-group-lg">
              <a href="http://localhost/ProyectoFinal/TODO/resenia.php?idUsuario=<?php echo "$idUsuario"; ?>" class="btn btn-primary">Reseñas <br>
                <?php
                  $consulta="SELECT * FROM resenia WHERE idUsuario=$idUsuario";
                  $resultado=mysqli_query($conn,$consulta);
                  $cantResult=mysqli_num_rows($resultado);
                  echo $cantResult;
                ?>
              </a>
              <a href="http://localhost/ProyectoFinal/TODO/seguidores.php?idUsuario=<?php echo "$idUsuario"; ?>" class="btn btn-primary">Seguidores <br>
                <?php
                  $consulta="SELECT * FROM seguimiento WHERE idUsuarioSeguido=$idUsuario";
                  $resultado=mysqli_query($conn,$consulta);
                  $cantResult=mysqli_num_rows($resultado);
                  echo $cantResult;
                ?>
              </a>
              <a href="http://localhost/ProyectoFinal/TODO/seguidos.php?idUsuario=<?php echo "$idUsuario"; ?>" class="btn btn-primary">Seguidos <br>
                <?php
                  $consulta="SELECT * FROM seguimiento WHERE idUsuario=$idUsuario";
                  $resultado=mysqli_query($conn,$consulta);
                  $cantResult=mysqli_num_rows($resultado);
                  echo $cantResult;
                ?>
              </a>
            </div>
            <br>
            <br>
            <?php

                $consulta2="SELECT * FROM seguimiento WHERE idUsuario=$miId and idUsuarioSeguido=$idUsuario";
                $resultado2=mysqli_query($conn,$consulta2);
                $cantResult2=mysqli_num_rows($resultado2);
                if($cantResult2=="1"){
                  echo "<button type='button' class='btn btn-primary' id='btnSiguiendo' onclick='seguir(this)'>Siguiendo</button>";
                }
                else {
                  echo "<button type='button' class='btn btn-primary' id='btnSeguir'>Seguir</button>";
                }
              ?>
          </div> <!-- FinRowMenu-->

        </div> <!--Fin Col sm-4-->
        <div class="col-sm-1">
          <ul class="list-unstyled">
              <li><a href="https://www.facebook.com/<?php echo "$facebookUsuario"; ?>"><img src="http://localhost/ProyectoFinal/TODO/LogoFB.svg" width="50" height="50" alt="Logo Facebook"></a></li>
              <li><a href="https://www.twitter.com/<?php echo "$twitterUsuario"; ?>"><img src="http://localhost/ProyectoFinal/TODO/LogoTW.svg" width="50" height="50" alt="Logo Twitter"></a></li>
              <li><a href="https://www.instagram.com/<?php echo "$instagramUsuario"; ?>"><img src="http://localhost/ProyectoFinal/TODO/LogoIns.svg" width="50" height="50" alt="Logo Instagram"></a></li>
          </ul>
        </div>
      </div><!-- FinRow -->
    </div><!--FinPerfil-->
