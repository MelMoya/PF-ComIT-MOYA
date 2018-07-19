<script>
  function dejaSeguir() {
    <? php
    $sSQL= "DELETE FROM seguimiento WHERE idUsuario=$id AND idUsuarioSeguido=$idSeguido";
    mysqli_query($conn,$sSQL);
    header('seguidores.php');
    //header("Refresh:0");
    ?>
    //$("#editarBt").hide();
  }
  function Seguir() {
    <? php
    $ssql="INSERT INTO seguimiento (idUsuario, idUsuarioSeguido) VALUES ('$id', '$idSeguido')";
    mysqli_query($conn,$sSQL);
    header('seguidores.php');
    //header("Refresh:0");
    ?>
    //$("#editarBt").hide();
  }
</script>


    <div class="col-sm-4" id="seguidor">
      <div class="col-sm-3" id="colFoto">
        <img src="http://localhost/ProyectoFinal/TODO/<?php echo "$fotoUsuario"; ?>" alt="fotoUsuario" class="img-circle" id="fotoU">
      </div>
      <div class="col-sm-9" id="cUsuario">
        <a href="http://localhost/ProyectoFinal/TODO/perfilUsuario.php/?idUsuario=<?php echo($idSeguido); ?>"><?php echo $Nombre ?></a> <br>
        <?php
            $consulta2="SELECT idUsuarioSeguido FROM seguimiento WHERE idUsuario=$id and idUsuarioSeguido=$idSeguido";
            $resultado2=mysqli_query($conn,$consulta2);
            $cantResult2=mysqli_num_rows($resultado2);
            if($cantResult2=="1"){
              echo "<button type='button' class='btn btn-primary' id='btnSiguiendo'>Siguiendo</button>";
            }
            else {
              echo "<button type='button' class='btn btn-primary' id='btnSeguir'>Seguir</button>";
            }
          ?>
      </div>
    </div>
