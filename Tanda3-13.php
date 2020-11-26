<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>13</title>
  </head>
  <body>   
        <?php
          if (!isset($_POST['n'])) {
            $n = 0;
            $contadornegativo = 0;
            $contadorpositivo = 0;
            $cuentanumeros = 0;
          } else {
            $n = $_POST['n'];
            $contadornegativo = $_POST['contadornegativo'];
            $contadorpositivo = $_POST['contadorpositivo'];
            $cuentanumeros = $_POST['cuentanumeros'];
            if($n>=0)
            {
              $contadorpositivo++;
            }
            else
            {
              $contadornegativo++;
            }
          }
          
          if ($cuentanumeros <10)
          {
            $cuentanumeros++;
            echo'<form action="Tanda3-13.php" method="post">';
            echo'<input type="number" name="n" value="',$n,'" autofocus>';
            echo'<input type="hidden" name="contadornegativo" value="',$contadornegativo,'">';
            echo'<input type="hidden" name="contadorpositivo" value="',$contadorpositivo,'">';
            echo'<input type="hidden" name="cuentanumeros" value="',$cuentanumeros,'">';
            echo'<input type="submit" value="Aceptar">';
          }
          else
          {
            echo 'Los positivos son '. $contadorpositivo;
            echo 'Los negativos son '. $contadornegativo;
          }
          
        ?>
  </body>
</html>