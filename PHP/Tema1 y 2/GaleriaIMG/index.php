<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
    <form class="login" action="<?php $_SERVER["PHP_SHELF"];?>" method="post">
      <h1 class="login-title">Login</h1>
      <input type="text" class="login-input" placeholder="Usuario" autofocus name="usuario">
      <input type="password" class="login-input" placeholder="Contraseña" name="password">
      <input type="submit" value="Lets Go" class="login-button">
  </form>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $_SESSION['user'] = $_POST['usuario'];
        $_SESSION['password'] = $_POST['password'];

        if(($_SESSION['user'] == "admin" && $_SESSION['password'] == "admin123") || ($_SESSION['user'] == "user" && $_SESSION['password'] == "user1234")){
          header("location:sobremi.php");
        }
        else {
          echo '<h3 class="error">¡Usuario o contraseña incorrectos!</h3>';
        }
      }
       ?>
  </body>
</html>
