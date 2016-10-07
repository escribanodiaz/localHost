<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
      <label>From:</label>
      <input type="text" name="from" value="">
      <br />
      <label>Assumpte:</label>
      <input type="text" name="assumpte" value="">
      <br />
      <label>Missatge</label>
      <input type="text" name="missatge" value="">
      <br />
      <input type="submit" value="Enviar">
    </form>

    <?php
      $from = $_POST["from"];
      $assumpte = $_POST["assumpte"];
      $missatge = $_POST["missatge"];
      mail("aescribanodiaz@gmail.com",$assumpte,$missatge, "From: $from");
      echo "E-mail enviat correctamente";
    ?>
  </body>
</html>
