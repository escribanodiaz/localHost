<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $direc = scandir("upload");
        for ($i=2; $i < count($direc); $i++) {
          echo $direc[$i];
          echo "<br />";
        }
     ?>

  </body>
</html>
