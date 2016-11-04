<?php
include 'conexion.php';

 $usuario = mysqli_real_escape_string($conexion, $_POST['user']);
 $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
 $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
 $password = mysqli_real_escape_string($conexion, $_POST['contra']);
 $p=md5($password);

 $sql = "INSERT INTO usuarios (usuario,nombre,apellido,password) VALUES ('$usuario','$nombre','$apellido','$p')";

 if(!mysqli_query($conexion,$sql)){
   die('Error: ' .mysqli_error($conexion));
  header("location:registrar.php");
 }

 echo "El campo se ha añadido correctamente.";
 mysqli_close($conexion);

header("location:index.php");

 ?>
