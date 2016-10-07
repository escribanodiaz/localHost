<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      $nom = $_POST['nom'];
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica 15</title>
  </head>
  <body bgcolor="<?php echo $nom; ?> ">
    <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
      Nom: <input type="text" name="nom">
      <input type="submit">
    </form>
  </body>
</html>
