<?php
session_start();
if($_GET['cerrar']=="si"){
      session_destroy();
        session_unset();
      echo "Session Finalizada";
    }
    header("location:../index.php");
 ?>
