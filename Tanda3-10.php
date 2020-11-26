<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>10</title>
  </head>
  <body>
        Este programa calcula la media de los números positivos introducidos.<br>
        Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
        
        <?php
          if (!isset($_POST['n'])) {
            $n = 0;
            $total = 0;
            $contador = 0;
          } else {
            $n = $_POST['n'];
            $total = $_POST['total'];
            $contador = $_POST['contador'];
          }
          if ($n >=0)
          {
            $contador++;
            $total = $total + $n;
            echo'<form action="Tanda3-10.php" method="post">';
            echo'<input type="number" name="n" value="',$n,'" autofocus>';
            echo'<input type="hidden" name="total" value="',$total,'">';
            echo'<input type="hidden" name="contador" value="',$contador,'">';
            echo'<input type="submit" value="Aceptar">'; 
          }
          else
          {
            echo 'La media de los numeros es '. $total/($contador-1);
          }
          
        ?>
  </body>
</html>