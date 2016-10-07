<?php
  //Quina es la direferencia entre incluide i require?
  //require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra saltará un error “PHP Fatal error” y el programa PHP se detendrá.
  //include(), por el contrario, si no se encuentra dicho código, saltará un error tipo “Warning” y el programa seguirá ejecutándose (aunque como consecuencia de no incluirse el código puede que no funcione correctamente, o sí, depende de la situación).
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Practica 5</title>
   </head>
   <body>
     <h1>Practica 5</h1>
      <div>
        <?php include "capçalera.txt"; ?>
      </div>

      <p>
        ///////////////////////////////////////////////////////////////
      </p>

      <div>
        <?php include"peu.txt"; ?>
      </div>
   </body>
 </html>
