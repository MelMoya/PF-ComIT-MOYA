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
      $contraseniaUsuario1=$_POST['pswd1'];
      $contraseniaUsuario2=$_POST['pswd2'];
      $foto="usuario.svg";
      $genero="1";
      if($contraseniaUsuario1==$contraseniaUsuario2){
        $sql="INSERT INTO usuario ( email, contrasenia, foto, generoUsuario) VALUES ('$correoUsuario', '$contraseniaUsuario1', '$foto', '$genero')";
        //$sql="INSERT INTO usuario ( idUsuario, nombreUsuario, nombreYApellido, generoUsuario, pais, email, contrasenia, foto, descripcion, facebook, twitter, instagram) VALUES ( '', '', '', '', '', '$correoUsuario', '$contraseniaUsuario', '', '', '', '', '')";

        if(mysqli_query($conn,$sql)){
          $consulta="SELECT * FROM usuario WHERE email='$correoUsuario'";
          $resultado=mysqli_query($conn,$consulta);
          $valor=mysqli_fetch_array($resultado);

          session_start();
          $_SESSION['id_User']="$valor[idUsuario]";
          $_SESSION['nick_User']="$valor[nombreUsuario]";
          $_SESSION['nombreCompleto_User']="$valor[nombreYApellido]";
          $_SESSION['genero_User']="$valor[generoUsuario]";
          $_SESSION['pais_User']="$valor[pais]";
          $_SESSION['email_User']="$valor[email]";
          $_SESSION['contrasenia_User']="$valor[contrasenia]";
          $_SESSION['foto_User']="$valor[foto]";
          $_SESSION['descripcion_User']="$valor[descripcion]";
          $_SESSION['facebook_User']="$valor[facebook]";
          $_SESSION['twitter_User']="$valor[twitter]";
          $_SESSION['instagram_User']="$valor[instagram]";

          $_SESSION["sIniciada"] = 1;//SI
          header('location: editarPerfil.php');
          //require 'editarPerfil.php';
          }
        else{
          include "error.php";
          echo"<script>setInterval('javascript:history.back(1)',2000);</script>";
          //echo"<script>javascript:history.back(1);</script>";
          //echo"<script>location.reload();</script>";
          }
      //mysqli_close($conn);
      }
      else{
        include "errorConfirmacionContrasenia.php";
        echo"<script>setInterval('javascript:history.back(1)',3000);</script>";

      }
 	 ?>
 </body>
 </html>
