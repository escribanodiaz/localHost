<?php
      include '../cabecera.php';
      session_start();
      echo '<div class="container col-xs-offset-3 well col-xs-8">';
      echo '<div class="row">';
      echo '<table class="table table-hover">';
      echo "<tr>";
      echo '<td>Ciclos</td>';
      echo '<td>Grados</td>';
      echo '<tr></tr>';
      $c1="SELECT * FROM ciclos";
          $ejecuta_c1=mysqli_query($conexion,$c1);
          while ($ciclos=mysqli_fetch_array($ejecuta_c1)) {
            echo "<tr class='info'>";
            echo '<td>'.utf8_encode($ciclos['ciclo']).' ('.$ciclos['codigo'].')</td>';
            $cod_ciclo=$ciclos['codigo'];
            echo '<td>'.utf8_encode($ciclos['grado']).'</td>';

                $c2="SELECT * FROM cursos WHERE cod_ciclo = '$cod_ciclo'";
                $ejecuta_c2=mysqli_query($conexion,$c2);
                while ($cursos=mysqli_fetch_array($ejecuta_c2)){
                  echo '<tr>';
                  echo '<td> <ul class="curso">'.utf8_encode($cursos['codigo']).'</td>';
                  $cod_curso=$cursos['codigo'];

                       $c3="SELECT * FROM modulos WHERE cod_curso='$cod_curso'";
                       $ejecuta_c3=mysqli_query($conexion,$c3);
                       while ($modulos=mysqli_fetch_array($ejecuta_c3)) {
                          echo '<tr>';
                          echo '<td> <li class="modulo">'.utf8_encode($modulos['nombre']).'</li></td>';
                          echo "</ul>";
                          echo '</tr>';
                  echo "</tr>";
              echo '</tr>';
                       }
            }
      }
      echo "</table>";
      include '../footer.php';

      echo '</div>';
  		echo '</div>';
       ?>
