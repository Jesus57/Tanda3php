<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>08</title>
  </head>
  <body>
        <?php
          $fibonacci  = [0,1];
          $n=$_POST['n'];
          for($i=2;$i<=$n;$i++)
            {
                $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
            }
            echo $fibonacci[$n];
        ?>
  </body>
</html>