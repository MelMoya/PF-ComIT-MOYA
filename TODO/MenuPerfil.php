<?php
  require ("vinculacion.php");
  $id=$_SESSION['id_User'];
?>
    <div class="perfil">
      <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2" id="foto">
          <img src="/imagenes/fotoPerfil/<?php echo $_SESSION['foto_User']; ?>" alt="fotoUsuario" class="img-circle">
        </div>
        <div class="col-sm-4">
          <h2><?php echo $_SESSION['nick_User']; ?></h2>
          <h5><?php echo $_SESSION['nombreCompleto_User']; ?></h5>
          <h2><?php echo $_SESSION['descripcion_User']; ?></h2>
        </div>

        <div class="col-sm-4">
          <div class="row" id="rowMenu">
            <div class="btn-group btn-group-lg">
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
            </div>
          </div>
          <div class="row">
            <br>
              <button id="bEditarPerfil" type="button" class="btn btn-primary" name="EditarPerfil" href="#" onclick="location='editarPerfil.php'"/>Editar Perfil</button>
          </div>
        </div>
        <div class="col-sm-1">
          <ul class="list-unstyled">
              <li><a href="https://www.facebook.com/<?php echo "$_SESSION[facebook_User]"; ?>"><img src="http://localhost/ProyectoFinal/TODO/LogoFB.svg" width="50" height="50" alt="Logo Facebook"></a></li>
              <li><a href="https://www.twitter.com/<?php echo "$_SESSION[twitter_User]"; ?>"><img src="http://localhost/ProyectoFinal/TODO/LogoTW.svg" width="50" height="50" alt="Logo Twitter"></a></li>
              <li><a href="https://www.instagram.com/<?php echo "$_SESSION[instagram_User]"; ?>"><img src="http://localhost/ProyectoFinal/TODO/LogoIns.svg" width="50" height="50" alt="Logo Instagram"></a></li>
          </ul>
        </div>
      </div><!-- FinRow -->
    </div><!--FinPerfil-->
