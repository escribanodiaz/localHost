<?php
session_start();
if($_GET['cerrar']=="si"){
      session_destroy();
        unset($_SESSION['username']);
        unset($_COOKIE['usu']);
      echo "Session Finalizada";
    }
    unset($_COOKIE['usu']);
    header("location:index.php");
 ?>
