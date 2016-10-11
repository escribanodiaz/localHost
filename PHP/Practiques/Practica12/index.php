<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica 12</title>
  </head>
  <body>
    <form action="<?php $_SERVER["PHP_SHELF"];?>" method="post">
    <?php
      $direc = scandir("upload");
        for ($i=2; $i < count($direc); $i++) {
          echo '<img src="upload/'.$direc[$i].'" width="200px" heigth="200px">';
          echo "  ";
          echo "<br />";
          echo '<input type="submit" name="borrar" value="borrar '.$direc[$i].' "><br />';
          echo "<br />";
        }
     ?>
     </form>
  </body>
</html>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['borrar'];
    $nombrearchivo = explode(" ",$nombre);
    $nombrearchivo = $nombrearchivo[1];
    unlink('upload/'.$nombrearchivo);

  }
 ?>
