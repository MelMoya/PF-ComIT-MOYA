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
      $idU=$_SESSION['id_User'];
      $idLibro=$_GET['idLibro'];
      //$estadoR=$_POST['selectbasic'];
      //$valoracionR=$_POST['estrellas'];
      $reseniaR=$_POST['textarea'];

      $existeR="SELECT * FROM resenia WHERE idLibro=$rIdLibro AND idUsuario=$id";
      $existeRresult=mysqli_query($conn,$existeR);
      $existeCant=mysqli_num_rows($existeRresult);
      if($existeCant >0){
        $sql="UPDATE resenia SET idUsuario='$idU', idLibro='$idLibro', resenia='$reseniaR', estado='1'";
      }
      else {
        $sql="INSERT INTO resenia ( idUsuario, idLibro, resenia, estado) VALUES ('$idU', '$idLibro', '$reseniaR', '1')";
      }

      $result = mysqli_query($conn,$sql);
      if (! $result){
          echo mysqli_error();
      }else {
        //echo "<script>setInterval('javascript:history.back(1)',1000);</script>";
        header('location:http://localhost/ProyectoFinal/TODO/biblioteca.php');
        /*echo "<script>setInterval('location='http://localhost/ProyectoFinal/TODO/biblioteca.php ?>,1000);</script>";
      */}
      mysqli_close($conn);
 	 ?>
 </body>
 </html>
