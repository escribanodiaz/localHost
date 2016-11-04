<!--//Escriu el codi php en cada comentaria.
  -Quin valor mostrara? Per Que? -->
    <?php
      //Definix una funció aniversari, defnix $edat com a variable global, afegeix 1 al valor de $edat i tanca la funció
      function aniversari() {
      global $edat;
      $edat +=1;
    }
    //Estableix que l'edat és 30
      $edat = 30;
    //Invoca la funció
      aniversari();
    //Mostra l'edat
     echo $edat;
  ?>
  <!-- Mostra 31 perque a ser una variable global lo agafa en tota la pagina php-->
  
