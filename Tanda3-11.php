<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>08</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['n'])) {
            echo'Por favor, introduzca un número entero:<br>';
            echo'<form action="Tanda3-11.php" method="post">';
            echo'<input type="number" name="n" autofocus>';
            echo'<input type="submit" value="Aceptar">';
            echo'</form>'; 
          }
          else
          {
            $n=$_POST['n'];
            echo '<table border=1px>';
            for ($i=0;$i<=5;$i++)
            {
              echo '<tr><td>'. ($n+$i).'</td><td>'.($n+$i)*($n+$i). '</td><td>'.($n+$i)*($n+$i)*($n+$i). '</td></tr>';
            }
            echo '</table>';
          }
          
        ?>
  </body>
</html>