<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica 18</title>
  </head>
  <body>
    <?php
      $marques = array("nike ","adidas","joma","ESPN","UFC","Reebok");
      echo reset($marques); //es para mostrar el principio del array
      $marques2 = array("YES","Under Armour","joma","NESN","Sky Sports","MLBAM ");
      echo end($marques2);//Per a mostrar el final del array

      print_r(array_intersect($marques, $marques2));
     ?>
  </body>
</html>
