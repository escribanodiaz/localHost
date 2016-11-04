<?php
  $ruta = "upload/" . "prueba.jpg";

  if(is_file($ruta)){
    header("Content-Type: application/force-dowload");
    header("Content-Disposition: attachment; filename = prueba.jpg");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: " .filesize($ruta));

    readfile($ruta);
  }

 ?>
