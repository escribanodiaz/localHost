<?php
  if($_FILES["foto"]["error"] > 0){
    echo "Error: ".$_FILES["foto"]["error"] . "<br>";
  } else {
    echo "Nom de la image: " . $_FILES["foto"]["name"] ."<br>";
    echo "Tipus: " . $_FILES["foto"]["type"] ."<br>";
    echo "Mida: " . ($_FILES["foto"]["size"] / 1024) ." KB <br>";
    echo "Imatge emmagatzenada en: " . $_FILES["foto"]["tmp_name"];
  }

  $extensiones = array("gif", "png", "jpg");
  $temp = explode("/", $_FILES ["foto"]["type"]);
  $extension = end($temp);

  if(file_exists("upload/" .$_FILES["foto"]["name"])){
    echo $_FILES["foto"]["name"] . "ja existeix.";
  }elseif (in_array($extension,$extensiones)) {
    if($_FILES["foto"]["size"]<20000){
      move_uploaded_file($_FILES["foto"]["tmp_name"] , "upload/" .$_FILES["foto"]["name"]);
      echo "Imatge emmagatzenada en: " ."upload/" .$_FILES["foto"]["name"];
    }
    else {
      echo "<br /> La imagen es desmasiado grande";
    }
  }
  else {
    echo "<br /> La no extension no es correcta ";
  }
 ?>
