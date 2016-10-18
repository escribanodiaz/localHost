<!DOCTYPE html>
<html lang="en">
<head>
<title>Mini Portfolio | Resume</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font/css/fontello.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

  <style media="screen">
      .divalbum{
        width: 200px;
        float: left;
        height: 100%;
        margin-right: 50px;
      }
      .divimg{
        width: 589px;
        float: left;
        height: 100%;
      }

      .divimg img{
        width: 100px;
        height: 100px;
        margin: 20px;
      }
      .divform{
        float: left;
      }
      .inputimg{
        margin-left: 20px;
      }
  </style>

</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav nav-collapse pull-right">
        <li><a href="sobremi.php" >Inicio</a></li>
        <li><a href="imagenes.php">Imagenes</a></li>
        <li><a href="nuevalbum.php"></i>Nuevo Album</a></li>
        <li><a href="nuevfoto.php"></i>Subir Fotografia</a></li>
        <li><a href="servidor.php" class="active"></i>Servidor</a></li>
        <li><?php setlocale(LC_ALL, 'es_ES.UTF-8');echo strftime("%A,%e %B %Y %H:%M:%S");?></li>
      </ul>
      <div class="nav-collapse collapse"></div>
    </div>
  </div>
</div>
<div class="container resume">
  <h2>Servidor</h2>
  <div class="divalbum">
    <?php
        $direc = scandir("albumes");
        for ($i=2; $i < count($direc); $i++) {
          echo '<h3>'.$direc[$i].'</h3>';

        }
     ?>
  </div>
  <div class="divimg">
    <form action="<?php $_SERVER["PHP_SHELF"];?>" method="post">
    <?php
    $direc = scandir("albumes");
    for ($i=2; $i < count($direc); $i++) {
        $direc2 = scandir("albumes/".$direc[$i]);
        for ($a=2; $a < count($direc2) ; $a++) {
          echo "<div class='divform'>";
          echo '<img src="albumes/'.$direc[$i].'/'.$direc2[$a].'">';
          echo "<br />";
          echo '<input class="inputimg" type="submit" name="borrar" value="'.$direc[$i].'/'.$direc2[$a].'">';
          echo "<br />";
          echo "</div>";
        }
    }
   ?>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $nombre = $_POST['borrar'];
     $nombrearchivo = explode("/",$nombre);
     $nombrearchivo = $nombrearchivo[1];
     $nombrealbum = explode("/",$nombre);
     $nombrealbum = $nombrealbum[0];
     unlink('albumes/'.$nombrealbum.'/'.$nombrearchivo);
     header("location:servidor.php");
   }

  ?>

  </div>
</div>
<div class="row social">
  <ul class="social-icons">
    <li><a target="_blank" href="https://www.facebook.com/antonio.escribano.948"><img src="img/fb.png" alt=""></a></li>
    <li><a target="_blank" href="https://twitter.com/BrandsWebD"><img src="img/tw.png" alt=""></a></li>
    <li><a target="_blank" href="https://plus.google.com/u/1/"><img src="img/go.png" alt=""></a></li>
  </ul>
</div>
<div class="footer">
  <div class="container">
    <p class="pull-left"><a href="http://escribanodiaz.com.es/">www.escribanodiaz.com.es/</a></p>
    <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
  </div>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
  </div>
  <div class="modal-body">
    <form action="<?php $_SERVER["PHP_SHELF"];?>" method="post">
      <input type="text" name="name"  placeholder="Yopur Name">
      <input type="email" name="email" placeholder="Your Email">
      <input type="text" name="website" placeholder="Website (Optional)">
      <textarea rows="3" name="comentario" style="width:80%"></textarea>
      <br>
      <input type="submit" class="btn btn-large" value="Enviar" name="enviar">
    </form>
  </div>
</div>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#myModal').modal('hidden')
</script>
</body>
</html>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
      $email_to = "abrandsweb@gmail.com";
      $email_subject = "Contacto desde la Galeria de imagenes";

      // Aquí se deberían validar los datos ingresados por el usuario
      if(!isset($_POST['name']) ||
          !isset($_POST['email']) ||
          !isset($_POST['comentario'])) {
            echo "<b><p>Ocurrió un error y el formulario no ha sido enviado. </b></p><br />";
            echo "<p>Por favor, vuelva atrás y verifique la información ingresada</p><br />";
          }

          $email_message = "Detalles del formulario de contacto:\n\n";
          $email_message .= "Nombre: " . $_POST['name'] . "\n";
          $email_message .= "E-mail: " . $_POST['email'] . "\n";
            $email_message .= "Website: " . $_POST['website'] . "\n";
            $email_message .= "Comentarios: " . $_POST['comentario'] . "\n\n";


            // Ahora se envía el e-mail usando la función mail() de PHP
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($email_to, $email_subject, $email_message, $headers);
    }
 ?>
