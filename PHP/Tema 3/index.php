<?php session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style media="screen">
      .center{
        margin-left: 450px;
        margin-top: 100px;
      }
      .error{
        text-align: center;
        color: #F04949;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  </head>
  <body>

    <form role="form" action="<?php $_SERVER["PHP_SHELF"];?>" method="post">
      <div class="col-md-4 center">
        <h1>Inicio de Sesion</h1>

        <div class="form-group">
          <input type="text" class="form-control" name="user"
             placeholder="Introduce tu Usuario">
        </div>

           <div class="form-group">
             <input type="password" class="form-control" name="contra"
             placeholder="Contraseña">
           </div>
           <a href="registrar.php" class="btn btn-default">Registrar</a>
           <button type="submit" class="btn btn-default">Entrar</button>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'conexion.php';
          $usuario = mysqli_real_escape_string($conexion, $_POST['user']);
          $password = mysqli_real_escape_string($conexion, $_POST['contra']);
          $p=md5($password);

          $consulta = mysqli_query($conexion, "SELECT * FROM usuarios");

          while ($fila = mysqli_fetch_array($consulta)) {
            if($usuario==$fila['usuario'] && $p==$fila['password']){
                $_SESSION['usuario']=$usuario;
                header("location:principal.php");
            }
            else {
              $mal = true;
              $mensaje='<h3 class="error">¡Usuario o contraseña incorrectos!</h3>';
            }
          }
          echo $mensaje;
        }
        mysqli_close($conexion);
     ?>
   </div>
 </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
