<?php
  function calcular($n1,$n2,$o){
    switch ($o) {
      case '+':
          $result = $n1 + $n2;
          echo "+ es la operacion elegida:     " .$n1. " + " .$n2. " = " .$result;
        break;
        case '-':
            $result = $n1 - $n2;
            echo "- es la operacion elegida:  " .$n1. " - " .$n2. " = " .$result;
          break;

          case '*':
              $result = $n1 * $n2;
              echo "* es la operacion elegida: " .$n1. " * " .$n2. " = " .$result;
            break;

            case '/':
                $result = $n1 / $n2;
                echo "/ es la operacion elegida: " .$n1. " / " .$n2. " = " .$result;
              break;
      default:
        echo "No has puesto ningina operacion";
        break;
    }

    return $result;

  }
 calcular(2,2,"/")

 ?>
