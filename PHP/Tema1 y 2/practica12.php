<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica 12</title>
  </head>
  <body>
    <?php
      $nom="Antonio " ;
      $cognom1="Escribano ";
      $cognom2="Diaz-Portales";
      function Nom(){
        $GLOBALS['nom'] = $GLOBALS['nom']. $GLOBALS['cognom1']. $GLOBALS['cognom2'];
      }

      Nom();
      echo $nom;
    ?>
  </body>
</html>
