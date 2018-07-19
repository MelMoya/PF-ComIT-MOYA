<?php require ("vinculacion.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title></title>
</head>
<body>
  <?php
    session_start();
    $correoUsuario=$_SESSION['email_User'];
    //IMAGEN
    // Recibo los datos de la imagen
    $nombre_img = $_FILES['inputImagen']['name'];
    $tipo = $_FILES['inputImagen']['type'];
    $tamano = $_FILES['inputImagen']['size'];

    //Si existe imagen y tiene un tamaño correcto
    if (($nombre_img == !NULL) && ($_FILES['inputImagen']['size'] <= 200000))
    {
       //indicamos los formatos que permitimos subir a nuestro servidor
       /*if (($_FILES["inputImagen"]["type"] == "inputImagen/.svg")
       || ($_FILES["inputImagen"]["type"] == "inputImagen/jpeg")
       || ($_FILES["inputImagen"]["type"] == "inputImagen/jpg")
       || ($_FILES["inputImagen"]["type"] == "inputImagen/png"))
       {*/
          // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/imagenes/fotoPerfil/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['inputImagen']['tmp_name'],$directorio.$nombre_img);
        /*}
        else
        {
           //si no cumple con el formato
           echo "No se puede subir una imagen con ese formato ";
        }*/
    }
    else
    {
       //si existe la variable pero se pasa del tamaño permitido
       if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
    }
    $sql="UPDATE usuario SET foto='$nombre_img' WHERE email='$correoUsuario'";
    $result = mysqli_query($conn,$sql);
    if (! $result){
        echo mysqli_error();
    }else {
        $_SESSION['foto_User']=$nombre_img;
      echo "<script>setInterval('javascript:history.back(1)',1000);</script>";
      //header("Location: recargarDatos.php");
    }
    mysqli_close($conn);
  ?>
</body>
</html>
