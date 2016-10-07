<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Infomacion</title>
  </head>
  <body>
    <?php
    $nom = $_POST['nom'];
    $mail= $_POST['mail'];
    $pass = $_POST['passwd'];
    $comentari = $_POST['comentrari'];
    $necessitas = $_POST['nece'];
    $ocupacio = $_POST['ocupacio'];
    $check = $_POST['c'];

     ?>
    <h1>Informacion del Primer Formulario</h1>

    <p><?php echo ("Nom:" .$nom); ?></p>
    <p><?php echo ("E-Mail:" .$mail); ?></p>
    <p><?php echo ("Contaseña:" .$pass); ?></p>
    <p><?php echo ("Comentario:" .$comentari); ?></p>
    <p><?php echo ("Necessites:" .$nece); ?></p>
    <p><?php echo ("Ocupació:" .$ocupacio); ?></p>

    <p>
      <?php
      echo ("Deccisió: ");
        for($i = 0; $i<count($check);$i++){
           if($check != "") {
             echo ($check[$i]. " ");
           }

        }
        echo ("<br />");
       ?>
    </p>
  </body>
</html>
