<?php

  $servername="localhost";
  $username="root";
  $password="";
  $db_nombre="libromania";

  $conn=mysqli_connect($servername, $username, $password, $db_nombre);
  //$conn=mysqli_connect("localhost", "root", "","libromania");
  if(!$conn){
    die("Connectiton failed: ".mysqli_connect_error());
  }
  //  echo"Connected successfully";

  /*
  $consulta="SELECT * FROM USUARIO";
  $resultado=mysqli_query($conn,$consulta);
  $fila=mysqli_fetch_row($resultado);
  echo "<br>";
  for($i=0;$i<12;$i++){
    echo $fila[$i]." ";
  }
    mysqli_close($conn);
    */
?>
