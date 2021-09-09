<html>
  <head>
    <title>Question 6</title>
  </head>
  <body>
  <table cellspacing="0px" cellpadding="3px" border="1">
    <?php
    for($i=1;$i<=6;$i++) {
      echo "<tr>";
      for($j=1;$j<=5;$j++) {
        echo "<td>".$i." * ".$j." = ".$i*$j."</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
  </body>
</html>