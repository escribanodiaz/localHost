<?php
  setcookie("NombreUsu", $_POST['name'],time()+3600,"/","");
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Pagina 2</title>
   </head>
   <body>
     <p>
       S'ha establit una cookie de nom <b>Antonio</b> amb el valor:<b>
         <?php echo $_POST['name'];?>
       </b>
       que será valida durante 1 hora.
     </p>
     <a href="index.php"><input type="button" value="Volver a index"/></a>
   </body>
 </html>
