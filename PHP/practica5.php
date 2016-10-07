<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica 5</title>
  </head>
  <body>
    <?php
      $dia = date("d"); //agafa la data y la fica dins de la variable dia
        if($dia<=10){  //ara comproba si es menor o igual que 10 y si lo es mostra el mensaje
          echo "lloc actiu";
        }
        else { // i això serveis pero si la funció d'avance no funciona, aquesta funció funcione. 
          echo "lloc fora de servici";
        }
        ?>
  </body>
</html>
