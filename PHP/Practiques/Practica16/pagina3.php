  <?php session_start(); ?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina3</title>
  </head>
  <body>
    <?php
      if(isset($_SESSION['username'])){
          echo "<p>Has iniciat sessió com a: " . $_SESSION['username'] . " sent Antonio el nom d'usuari";
          echo "<p><a href='pagina1.php?cerrar=si'><input type='submit' value='Volver a la Pagina 1'</a></p>";
      }
      else {
        header("location: pagina1.php");
      }
     ?>
    </p>
  </body>
</html>
