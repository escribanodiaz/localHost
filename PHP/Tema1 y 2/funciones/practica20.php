<?php
echo "Fet amb el for";
echo "<br />";
$result = 0;
  for($e=0;$e<=10;$e++){
    $result = 2 * $e;
    echo "2 x " .$e. " = " .$result .'<br />';
  }
  echo "<br />";

  echo "Fet amb el while";
  echo "<br />";
  $f = 0;
  while($f<=10){
    echo "2 x " .$f. " = " .($f*2) .'<br />';
    $f++;
  }
  echo "<br />";

  echo "Fet amb el do/while";
  echo "<br />";
  $a=0;
  do{
    echo "2 x " .$a. " = " .($a*2) .'<br />';
    $a++;
  }while ($a <= 10);
 ?>
