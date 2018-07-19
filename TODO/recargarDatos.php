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
      $correoUsuario=$_POST['email'];

        $consulta="SELECT * FROM usuario WHERE email='$correoUsuario'";
        $resultado=mysqli_query($conn,$consulta);
        $valor=mysqli_fetch_array($resultado);

        $_SESSION['id_User']="$valor[idUsuario]";
        $_SESSION['nick_User']="$valor[nombreUsuario]";
        $_SESSION['nombreCompleto_User']="$valor[nombreYApellido]";
        $_SESSION['genero_User']="$valor[generoUsuario]";
        $_SESSION['pais_User']="$valor[pais]";
        $_SESSION['email_User']="$valor[email]";
        $_SESSION['pswd_User']="$valor[contrasenia]";
        $_SESSION['contrasenia_User']="$valor[contrasenia]";
        $_SESSION['foto_User']="$valor[foto]";
        $_SESSION['descripcion_User']="$valor[descripcion]";
        $_SESSION['facebook_User']="$valor[facebook]";
        $_SESSION['twitter_User']="$valor[twitter]";
        $_SESSION['instagram_User']="$valor[instagram]";


        //Redirecciona
        echo "<script>setInterval('javascript:history.back(3)',1000);</script>";
        //header("Location: editarPerfil.php");
      mysqli_close($conn);
 	 ?>
 </body>
 </html>
