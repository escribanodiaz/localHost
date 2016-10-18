<?php
  echo "Primera part";
  echo "<br />";
  $data1="2015.10.20";
  echo date("d/m/Y h:i:sa" .strtotime($data1));

  echo "<br>";
  echo "////////////////////////////////////////////////";
  echo "<br>";
  
    $f_inicio = strtotime("3rd Septembre 2014");
    $f_fin = strtotime("+4 month", $f_inicio);

    while ($f_inicio <= $f_fin) {
      echo date("d M",$f_inicio),"<br />";
      $f_inicio = strtotime("+2 week",$f_inicio);
    }

 ?>
