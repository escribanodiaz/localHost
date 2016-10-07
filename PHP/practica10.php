<!--//Escriu el codi php en cada comentaria.
  -Quin valor mostrara? Per Que? -->
    <?php
    //Definix una funció aniversari, defnix $edat com a variable estatica, afegeix 1 al valor de $edat i tanca la funció
    function aniversari() {
    static $edat;
    $edat +=1;
    echo $edat;
  }
  //Estableix que l'edat és 30
    $edat = 30;
  //Invoca la funció dues vegades
    aniversari();
    aniversari();
  //Mostra l'edat
   echo " ".$edat;
?>
    <!-- Mostra 1 2 30. El 1 i el dos perque ala hora de invocar la funcio suma la variable y la mostra y el 30 perque esta fora de la funció -->
