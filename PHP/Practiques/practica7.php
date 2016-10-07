<?php
  $fichero = fopen("practica.txt", "rç");
  while(!feof($fichero)){
    echo fgets($fichero);
    echo"<br>";
  }
  fclose($fichero);
 ?>
