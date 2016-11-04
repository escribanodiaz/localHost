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
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  </head>
  <body>

    <form role="form" action="insertar.php" method="post">
      <div class="col-md-4 center">
        <div class="form-group">
          <h1>Registro de Usuario</h1>
          <input type="text" class="form-control" name="nombre"
             placeholder="Introduce tu Nombre">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="apellido"
             placeholder="Introduce tus Apellidos">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="user"
             placeholder="Introduce tu Usuario">
        </div>

           <div class="form-group">
             <input type="password" class="form-control" name="contra"
             placeholder="Contraseña">
           </div>
    <button type="submit" class="btn btn-default">Registrar</button>
      </div>
</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
