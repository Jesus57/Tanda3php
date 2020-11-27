<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>13</title>
  </head>
  <body>   
        <?php
          if (!isset($_POST['base'])) {
            echo'Este programa calcula la potencia a partir de la base y el exponente.<br>';
            echo'<form action="Tanda3-14.php" method="post">';
            echo'  Base: <input type="number" name="base" autofocus><br>';
            echo'  Exponente: <input type="number" name="exponente"><br>';
            echo'  <input type="submit" value="Aceptar">';
            echo'</form>';
            $base=0;
            $exponente=0;
          } else {
            $base = $_POST['base'];
            $exponente = $_POST['exponente'];
          }

          if($exponente==0)
          {
            echo'El resultado de la potencia '. $base .'^'. $exponente . ' es = 1';
          }
          else
          {
            echo 'El resultado de la potencia es '. pow($base, $exponente);
          }
        ?>
  </body>
</html>