<?php
  function volumen($radio,$altura){
    $result =  pi() * $radio * $radio * $altura;
    return ("El volumen del cilindr es: " .pi(). " * " .$radio. " * " .$radio. " * " .$altura. " = " .$result);
  }

  echo (volumen(5,2));
 ?>
