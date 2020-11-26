<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>08</title>
  </head>
  <body>
          </form>
        <?php
          if (!isset($_POST['n']))
          {
            echo "Por favor, introduzca un número del 0 al 10:";
            echo '<form action="Tanda3-08.php" method="post">';
            echo '<input type="number" name="n" min="0" max="10"<br>';
            echo '<input type="submit" value="Aceptar">';
          }
          else
          {
            
            $n = $_POST['n'];
            echo '<table border=1px>';
            for($i=0;$i<=10;$i++)
            {
              echo '<tr><td>'. $n ." * ".$i. " = ". $n*$i . '</tr></td>';
            }
            echo '</table>';
          }
          
        ?>
  </body>
</html>