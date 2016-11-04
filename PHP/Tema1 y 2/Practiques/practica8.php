<?php
  $fichero = fopen("practica8.txt", "w");
  $txt = "Antonio Escribano";
  fwrite($fichero,$txt);
  fclose($fichero);
 ?>
