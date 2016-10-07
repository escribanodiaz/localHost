<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>practica 11</title>
  </head>
  <body>
    <!--//Escriu el codi php en cada comentaria.
      -Quin valor mostrara? Per Que? -->
        <?php
          //Crea la funció que sume 2 nombres y retorne el resultat
            function suma ($a,$b){
              $resultat = $a+$b;
              return $resultat;
            }

          //Definix les variables pels dos nombres i assigna'ls un valor
            $nombre1=2;
            $nombre2=2;

          //Definix una variable que cride a la funció
            $funcio = suma($nombre1,$nombre2);

          //Mostra per pantalla un missatge
            echo "La suma de " .$nombre1. " + " .$nombre2. " és : " .$funcio;
            ?>

  </body>
</html>
