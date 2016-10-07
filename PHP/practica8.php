<!--//Escriu el codi php en cada comentaria.
  -Quin valor mostrara? Per Que? -->
    <?php
      //Definix una funcio aniversari, estableix l'edat en 1 i tanca la funció
        function aniversari() {
        $edat = 1;
      }
      //Estableix que l'edat és 30
        $edat = 30;
      //Invoca la funció
        aniversari();
      //Mostra l'edat
       echo $edat;
    ?>

    <!-- Mostra 30 perque el echo de edat esta fora y agafa l'edat que conte 30 -->
