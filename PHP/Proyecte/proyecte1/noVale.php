<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestion de Productos</title>
  </head>
  <body>

     <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <div class="form-group">
           <label>Nom del Producte:</label>
           <input type="text" name="name" value="" placeholder="Producte">
         </div>
         <br>
         <div class="form-group">
           <label>Preu:</label>
           <input type="number" name="preu" value="" placeholder="Preu">
         </div>
         <br>
         <div class="form-group">
           <input type="submit" name="enviar" value="Enviar">
         </div>
     </form>

     <?php
     $name = $_POST['name'];
     $preu = $_POST['preu'];

       if($_SERVER["REQUEST_METHOD"] == "POST"){

          $productos = array($name => $preu);
            for ($i=0; $i < $productos.length ; $i++) {
              echo $productos;
            }
       }
      ?>

  </body>
</html>
