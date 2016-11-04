<?php
    $img = $_GET['ruta'];
    unlink($img);
    header("location:servidor.php");
 ?>
