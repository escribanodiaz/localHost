<?php
session_start();

  $_SESSION['username'] = $_POST['name'];
  setcookie("usu", $_POST['name'],time()+3600,"/","");
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
     <a href="pagina3.php"><input type="button" value="Ir a la Pagina 3"/></a>
   </body>
 </html>
