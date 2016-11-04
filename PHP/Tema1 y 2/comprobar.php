<?php
session_start();
//comprueba si el usario y la contaseña es el correcto
if($_POST['user']=='Antonio' && $_POST['contra']=='Diaz'){
  echo "Has iniciado sesion";
}
else {
  echo "No es correcto";
}
session_destroy();
 ?>
