<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>08</title>
  </head>
  <body>
        <?php
        if (!isset($_POST['n'])) {
          echo'Este programa muestra los n primeros números de la serie de Fibonacci.<br>';
          echo'Por favor, introduzca "n":<br>';
          echo'<form action="Tanda3-12.php" method="post">';
          echo '<input type="number" name="n" value="',$n,'" autofocus>';
          echo'<input type="submit" value="Aceptar">';
          echo'</form>'; 
        }
        else{
          $fibonacci1 =0;
          $fibonacci2 =1;
          $patata=0;
          $n=$_POST['n'];
          echo "0, 1, ";
          for($i=0;$i<$n-2;$i++)
            {
              $patata=$fibonacci1;
              $fibonacci1=$fibonacci2;
              $fibonacci2= $patata+$fibonacci1;
                echo " ". $fibonacci2 . ',';
            }
        }
          
        ?>
  </body>
</html>