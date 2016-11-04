<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$album = $_POST["albums"];
  rmdir("albumes/".$album);
}
header("location:servidor.php");
 ?>
