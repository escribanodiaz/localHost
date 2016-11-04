<?php session_start(); ?>
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
      .divform a{
        height: 30px;
        width: 50px;
        margin-left: 35px;
      }
      .divform a img{
        width: 30px;
        height: 30px;
        margin: 0 auto;
      }

  </style>

</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav nav-collapse pull-right">
        <?php
        if($_SESSION['user'] == "admin" && $_SESSION['password']=="admin123"){
          ?>
          <li><a href="sobremi.php">Inicio</a></li>
          <li><a href="imagenes.php">Imagenes</a></li>
          <li><a href="nuevalbum.php">Nuevo Album</a></li>
          <li><a href="nuevfoto.php">Subir Fotografia</a></li>
          <li><a href="servidor.php"  class="active">Servidor</a></li>
          <li><?php setlocale(LC_ALL, 'es_ES.UTF-8');echo strftime("%A,%e %B %Y %H:%M:%S");?></li>
        <?php }
        elseif ($_SESSION['user'] == "user" && $_SESSION['password'] == "user1234") {
          header("location:index.php");
        }
        else {
          header("location:index.php");
        }
         ?>
       </ul>
      <div class="nav-collapse collapse"></div>
    </div>
  </div>
</div>
<div class="container resume">
  <h2>Servidor</h2>
  <div class="divalbum">
    <div>
      <?php
          $direc = scandir("albumes");
          for ($i=2; $i < count($direc); $i++) {
            echo '<h3>'.$direc[$i].'</h3>';

          }
       ?>
    </div>
    <div>
        <h2>Borrar Albumes</h2>
        <form action="borraralbum.php" method="post">
          <label>Seleccion la carpeta que quieres borrar</label>
          <select name="albums" class="selectpicker">
            <?php
            for ($i=2; $i < count($direc); $i++) {
              echo '<option value='.$direc[$i].'>'.$direc[$i].'</option>';
            }
             ?>
           </select>
             <input type="submit" name="name" value="Borrar">
        </form>
    </div>
  </div>
  <div class="divimg">
    <h2>Borrar Imagenes</h2>
    <?php
    $direc = scandir("albumes");
    for ($i=2; $i < count($direc); $i++) {
        $direc2 = scandir("albumes/".$direc[$i]);
        for ($a=2; $a < count($direc2) ; $a++) {
          echo "<div class='divform'>";
          echo '<img src="albumes/'.$direc[$i].'/'.$direc2[$a].'">';
          echo "<br />";
          echo '<a href="borrareimg.php?ruta=albumes/'.$direc[$i].'/'.$direc2[$a].'" class="btn btn-default">
                  <img src="img/eliminar.png">
                </a>';
          echo "<br />";
          echo "</div>";
        }
    }
   ?>
  </div>
</div>
<div class="row social">
  <ul class="social-icons">
    <li><a target="_blank" href="https://www.facebook.com/antonio.escribano.948"><img src="img/fb.png" alt="face"></a></li>
    <li><a target="_blank" href="https://twitter.com/BrandsWebD"><img src="img/tw.png" alt="twitter"></a></li>
    <li><a target="_blank" href="https://plus.google.com/u/1/"><img src="img/go.png" alt="googleplus"></a></li>
    <li><a href="cerrarsesion.php?cerrar=si"><img src="img/cerrars.png" alt="cerrar sesion"></a></li>
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
    <form action="contacto.php" method="post">
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
