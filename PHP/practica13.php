<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica 13</title>
  </head>
  <body>
    <?php
      echo htmlentities($_SERVER["PHP_SELF"]). "<br />"; //Mostra en el archiu que te encontres
      echo htmlentities($_SERVER["SERVER_NAME"]). "<br />"; //mostra en el servidor que estas guardando la informació
      echo htmlentities($_SERVER["HTTP_HOST"]). "<br />"; //Contenido de la cabecera Host:
      echo htmlentities($_SERVER["HTTP_REFERER"]). "<br />"; //Mostra la ruto on es troba el archiu
      echo htmlentities($_SERVER["HTTP_USER_AGENT"]). "<br />";//Una cadena que indica el agente de usuario empleado para acceder a la pagina
      echo htmlentities($_SERVER["SCRIPT_NAME"]). "<br />"; //El nom del archiu
    ?>
  </body>
</html>
