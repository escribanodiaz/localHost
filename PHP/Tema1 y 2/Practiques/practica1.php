<?php
  $Multiarray = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  for ($i=0; $i < count($Multiarray); $i++) {
      echo "Fila numero " .$i . "<br />";
      echo $Multiarray[$i][0].": En el confesionario ". $Multiarray[$i][1]." Vendidos: ".$Multiarray[$i][2];
      echo "<br />";
  }

 ?>
