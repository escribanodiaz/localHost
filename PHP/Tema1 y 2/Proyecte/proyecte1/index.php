<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maquina Expendedora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php
     $maquina = array('Cocacola' => 1, 'Fanta' => 1, 'Aquarius' => 1.5, 'Pepsi' =>0.50, 'Agua' => 0.80, 'Moster' => 1.65, 'Misil' =>1 );

     if($_SERVER["REQUEST_METHOD"] == "POST"){
       $dinero = $_POST['dinero'];
       $producto = $_POST['submit'];
       $seleccionado = "El producto seleccionado es " .$producto;
       $precio = $maquina[$_POST['submit']];
       $ranura = "Inserte $precio EUR por la ranura";
        if($dinero == $precio){
          $mensaje = "El preu es exacte, has agafat " .$producto;
        }
        else if ($dinero > $precio) {
          $mensaje = "El dinero introducido es mayor, has agafat " .$producto;
          $devolucion = "La maquina te devolvera " .($dinero-$precio). " EUR";
          }
          elseif ($dinero < $precio) {
            $mensaje = "No has introducido suficiente dinero. Te faltan " .($precio-$dinero). " EUR";
          }
     }
     ?>

     <style media="screen">
       *{text-align: center;}
     </style>
  </head>
  <body>
     <form  action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
       <table border="1px">
         <tr>
           <td colspan="2"> Mi Maquina Exprendedora <br/>
             <?php echo $seleccionado; ?><br/>
             <?php echo $ranura; ?> &nbsp
             <input type="text" name="dinero" value="<?php echo $dinero;?>"></input>
           </br>
             <?php echo $mensaje; ?>
           </td>
         </tr>
         <tr>
           <td rowspan="<?php echo(count($maquina)+2);?>">
             <img alt="Cocacola" src="descarga.jpg"></img>
           </td>
           <?php foreach ($maquina as $indice => $valor) {
             ?>
             <td>
               <input type="submit" name="submit" value="<?php echo $indice ;?>">
             </td>
           </tr>
           <?php
           } ?>
           <tr>
             <td>
               <?php echo $seleccionado ?>
             </td>
           </tr>
           <tr>
             <td>
               <?php echo $devolucion ?>
             </td>
           </tr>
       </table>
     </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
