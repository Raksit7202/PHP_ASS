<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    for($i=0;$i<4;$i++) {
      for($j=0;$j<=$i;$j++)
      echo ' *';
      echo "</br>";
    }
    for($i--;$i>0;$i--) {
      for($j=0;$j<$i;$j++)
      echo ' *';
      echo "</br>";
    }
    ?> 
  </body>
</html>