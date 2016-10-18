  <?php
  session_start();
    if($_GET['cerrar']=="si"){
      session_destroy();
        unset($_SESSION['username']);
        unset($_COOKIE['usu']);
      echo "Session Finalizada";
    }
    unset($_COOKIE['usu']);
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina 1</title>
  </head>
  <body>
    <form action="pagina2.php" method="post">
      <label for="name">Introduzca el nombre</label>
      <br />
      <input type="text" name="name" value="<?php echo $_COOKIE{"usu"};?>">
      <input type="submit" name="Enviar" value="Enviar">
    </form>
  </body>
</html>
