<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $conexion = mysqli_connect("localhost","escribanodiaz","Adminlun@3","solvam_escribano");
      if(mysqli_connect_errno()){
        echo "Conexion Fallida: ".mysqli_connect_error();
      }
      
     ?>
  </body>
</html>
