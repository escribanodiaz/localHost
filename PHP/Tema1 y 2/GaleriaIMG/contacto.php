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
            $email_message .= "Mensaje: " . $_POST['comentario'] . "\n\n";


            // Ahora se envía el e-mail usando la función mail() de PHP
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($email_to, $email_subject, $email_message, $headers);
    }
    header("location:sobremi.php");
 ?>
