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
      <input type="text" name="name" value="<?php echo $_COOKIE{"NombreUsu"};?>">
      <input type="submit" name="Enviar" value="Enviar">
    </form>
  </body>
</html>
