<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>15.php</title>
  </head>
  <body>
        <?php

          if (!isset($_POST['base'])) 
          {
            echo' Este programa calcula una serie de potencias sucesivas a partir de la base y el exponente.<br>';
            echo' <form action="Tanda3-15.php" method="post">';
            echo'   Base: <input type="number" name="base" autofocus><br>';
            echo'   Exponente: <input type="number" name="exponenteFinal"><br>';
            echo'   <input type="submit" value="Aceptar">';
            echo' </form>';
          } else {
            $base = $_POST['base'];
            $exponenteFinal = $_POST['exponenteFinal'];

            for ($i = 0; $i <= $exponenteFinal; $i++) {
              $potencia = 1;
              $exponente = $i;

              for ($j = 0; $j < $exponente; $j++) {
                $potencia *= $base;
              }

              echo "$base ^ $exponente = $potencia<br>";
            }
          }
          ?>
          <br><br>
  </body>
</html>