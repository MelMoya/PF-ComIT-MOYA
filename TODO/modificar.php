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
      $nickName=$_POST['nickName'];
      $nombreCompleto=$_POST['nomYap'];
      $contrasenia=$_POST['pswd'];
      $correoUsuario=$_SESSION['email_User'];
      $pais=$_POST['pais'];
      $genero=$_POST['genero'];
      $descrip=$_POST['descripcion'];
      $facebook=$_POST['facebook'];
      $twitter=$_POST['twitter'];
      $instagram=$_POST['instagram'];


      //REALIZAR CONSULTA
      $sql="UPDATE usuario SET nombreUsuario='$nickName', nombreYApellido='$nombreCompleto', generoUsuario='$genero', pais='$pais', contrasenia='$contrasenia', descripcion='$descrip', facebook='$facebook', twitter='$twitter', instagram='$instagram' WHERE email='$correoUsuario'";
      //$sql="INSERT INTO usuario ( idUsuario, nombreUsuario, nombreYApellido, generoUsuario, pais, email, contrasenia, foto, descripcion, facebook, twitter, instagram) VALUES ( '', '$nickName', '$nombreCompleto', '', '', '$correoUsuario', '$contrasenia', '', '$descrip', '$facebook', '$twitter', '$instagram')";
      $result = mysqli_query($conn,$sql);
      if (! $result){
          echo mysqli_error();
      }else {
        //Actualizar Datos
        $_SESSION['nick_User']=$nickName;
        $_SESSION['nombreCompleto_User']=$nombreCompleto;
        $_SESSION['genero_User']=$genero;
        $_SESSION['pais_User']=$pais;
        $_SESSION['email_User']=$correoUsuario;
        $_SESSION['contrasenia_User']=$contrasenia;
        $_SESSION['descripcion_User']=$descrip;
        $_SESSION['facebook_User']=$facebook;
        $_SESSION['twitter_User']=$twitter;
        $_SESSION['instagram_User']=$instagram;

        //require 'editarPerfil.php';
        echo "<script>setInterval('javascript:history.back(1)',1000);</script>";
        }
      mysqli_close($conn);
 	 ?>
 </body>
 </html>
