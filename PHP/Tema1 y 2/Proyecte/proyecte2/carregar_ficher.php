<?php
  if($_FILES["foto"]["error"] > 0){
    echo "Error: ".$_FILES["foto"]["error"] . "<br>";
  } else {
    echo "Nom de la image: " . $_FILES["foto"]["name"] ."<br>";
    echo "Tipus: " . $_FILES["foto"]["type"] ."<br>";
    echo "Mida: " . ($_FILES["foto"]["size"] / 1024) ." KB<br>";
    echo "Imatge emmagatzenada en: " . $_FILES["foto"]["tmp_name"];
  }

  if(file_exists("upload/" .$_FILES["foto"]["name"])){
    echo $_FILES["foto"]["name"] . "ja existeix.";
  } else {
    move_uploaded_file($_FILES["foto"]["tmp_name"] , "upload/" .$_FILES["foto"]["name"]);
    echo "Imatge emmagatzenada en: " ."upload/" .$_FILES["foto"]["name"];
  }
 ?>
