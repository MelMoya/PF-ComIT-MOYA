
    <div class="col-sm-10" id="infoLibro">
        <div class="col-sm-2">
          <img src="http://localhost/ProyectoFinal/TODO/<?php echo "$LFoto"; ?>" alt="FotoPortada" id="foto">
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-9" id="colInfo">
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
          <h3><a href="http://localhost/ProyectoFinal/TODO/PaginaLibro.php/?idLibro=<?php echo($rIdLibro); ?>"><?php echo("$LTitulo"); ?></a></h3>
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
            echo $cantR;
            ?> reseñas </h5>
          <select id="selectbasic" name="selectbasic" class="form-control">
            <option value="1" <?php if ($rEstado=="1") echo "selected"; ?>>Leido</option>
            <option value="2" <?php if ($rEstado=="2") echo "selected"; ?>>Leyendo</option>
            <option value="3" <?php if ($rEstado=="3") echo "selected"; ?>>Quiero Leer</option>
            <option value="4" <?php if ($rEstado=="4") echo "selected"; ?>>Abandonado</option>
          </select>
          <form>
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
        </div>
    </div>
