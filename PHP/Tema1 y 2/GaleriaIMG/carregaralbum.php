<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$dircalbum = $_POST["album"];

    if(file_exists("albumes/".$dircalbum)){
        echo("<p>EL NOMBRE DE ESTA CARPETA YA EXISTE</p>");
    }else{
        mkdir("albumes/".$dircalbum, 0775);
  }
}
header("location:nuevalbum.php");
 ?>
