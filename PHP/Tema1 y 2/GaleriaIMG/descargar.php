<?php
$descargar = $_GET['ruta'];
$nombrearchivo = explode("/",$descargar);
$nombrearchivo = $nombrearchivo[2];
  if(is_file($descargar)){
    header("Content-Type: application/force-dowload");
    header("Content-Disposition: attachment; filename ='.$nombrearchivo.'");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: " .filesize($descargar));

    readfile($descargar);
  }
  ?>
